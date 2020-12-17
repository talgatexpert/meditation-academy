<?php

namespace App\Http\Controllers\Admin\Participants;

use App\Http\Controllers\Admin\Controller;
use App\Http\Requests\Admin\ParticipantRequest;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public const IS_GRADUATE = 1; // Является выпускником


    /**
     * Участники
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        $participants = Participant::with('curator');

        // Фильтр куратора
        $curator = null;
        if ($request->curator) {
            // Проверяем, существует ли такой куратор
            if ($curator = User::active()->curator()->find($request->curator)) {
                $participants->where('curator_id', $curator->id);
            }
        }

        $participants = $participants->get();
        $curators = $this->getAvailableCurators();

        return view('pages.admin.participants.index', compact('participants', 'curators', 'curator'));
    }

    /**
     * Модальная форма назначения участнику куратора
     *
     * @param Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        $curators = $this->getAvailableCurators();

        return view('pages.admin.participants.modal', compact('participant', 'curators'));
    }

    /**
     * Назначение участнику куратора
     *
     * @param ParticipantRequest $request
     * @param Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function update(ParticipantRequest $request, Participant $participant)
    {
        // Если участник подтвержден, назначаем ему куратора, а так же указываем время назначения
        if ($participant->isVerified()) {
            $attributes = $request->validated();
            $isNewCurator = !is_null($participant->curator_id) && $participant->curator_id != $attributes['curator_id'];

            if (is_null($participant->curator_id) || $isNewCurator) {
                $attributes['curator_assigned_at'] = now();
                $participant->update($attributes);

                $curator = User::find($attributes['curator_id']);
                $request->session()->flash('status', 'Участнику "' . $participant->name . '" был успешно назначен ' . ($isNewCurator ? 'новый ' : '') . 'куратор "' . $curator->name . '".');
            }
        }

        return response()->json([
            'status' => 'OK',
            'redirect' => route('admin.participants.index'),
        ]);
    }

    /**
     * Подтверждение участника
     *
     * @param Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function verify(Participant $participant)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        // Подтверждаем участника
        $participant->verify();

        return redirect()->route('admin.participants.index')->with('status', 'Участник "' . $participant->name . '" был успешно подтвержден.');
    }

    /*
     * Добавляем участника в список выпускников
    */
    public function graduate(Participant $participant)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);
        // Если у участника нету сертификата то выдать сертификат
        if (!$participant->certificate) {
            // Выпускаем участника
            $participant->setGraduate();
        }
        // добавит участнику статус выбущен
        $participant->graduate = self::IS_GRADUATE;
        $participant->save();
        $participant->delete();

        return redirect()->route('admin.participants.index')->with('status', 'Участник "' . $participant->name . '" был успешно добавлен в выпускники.');
    }

    /**
     * Архивирование участника
     *
     * @param Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        $participant->delete();

        return redirect()->route('admin.participants.index')->with('status', 'Участник "' . $participant->name . '" был успешно помещен в архив.');
    }

    /**
     * Возвращает список доступных кураторов
     *
     * @return array
     */
    private function getAvailableCurators(): array
    {
        return ['' => ''] + User::active()->curator()->pluck('name', 'id')->toArray();
    }

}
