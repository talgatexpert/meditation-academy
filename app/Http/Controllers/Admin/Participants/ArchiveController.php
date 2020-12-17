<?php

namespace App\Http\Controllers\Admin\Participants;

use App\Http\Controllers\Admin\Controller;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{

    /**
     * Архив участников
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        $participants = Participant::with('curator')->onlyTrashed();

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

        return view('pages.admin.participants.archive', compact('participants', 'curators', 'curator'));
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
