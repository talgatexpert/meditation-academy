<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UserRequest;
use App\Models\Comment;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Пользователи
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Request $request)
    {
        // Проверка прав доступа
        $this->authorize(User::ABILITY_ADMIN);

        $users = User::get();

        return view('pages.admin.users.index', compact('users'));
    }

    /**
     * Форма добавления нового пользователя
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        // Проверка прав доступа
        $this->authorize(User::ABILITY_ADMIN);

        $user = null;
        $roles = $this->getAvailableRoles();

        return view('pages.admin.users.form', compact('user', 'roles'));
    }


    /**
     * Добавление нового пользователя
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());

        return redirect()->route('admin.users.index')->with('status', 'Пользователь "' . $user->email . '" был успешно создан.');
    }

    /**
     * Форма редактирования пользователя
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(User $user)
    {
        // Проверка прав доступа
        $this->authorize(User::ABILITY_ADMIN);
        $curators = User::active()->curator()->pluck('name', 'id')->all();

        // Нельзя редактировать супер-админа обычному админу
        abort_if($user->isSuperAdmin() && !\Auth::user()->isSuperAdmin(), 403);

        $roles = $this->getAvailableRoles();

        return view('pages.admin.users.form', compact('user', 'roles', 'curators'));
    }

    /**
     * Редактирование пользователя
     *
     * @param UserRequest $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        // Нельзя редактировать супер-админа обычному админу
        abort_if($user->isSuperAdmin() && !\Auth::user()->isSuperAdmin(), 403);

        $attributes = $request->validated();

        // Нельзя отключать или менять роль куратору, к которому привязаны участники
        if ((!\Arr::get($attributes, 'active') || \Arr::get($attributes, 'role') != User::ROLE_CURATOR) && $user->isCurator() && $user->participants->count()) {
//            dd($request->all());
            if ($request->has('curators')){
                $curator = User::find($request->get('curators'));
                Comment::where('curator_id', $user->id)->update(['curator_id' => $curator->id]);
                \DB::table('participants')->where('curator_id', $user->id)->update(['curator_id' => $curator->id]);
                $user->update($attributes);
                if ($user->wasChanged()) {
                    redirect()->route('admin.users.index')->with('status', 'Пользователь "' . $user->email . '" был успешно изменен.');
                }
            }else{
                return redirect()->route('admin.users.edit', [$user])->with('error', 'Нельзя отключать или менять роль куратору, к которому привязаны участники.');
            }
        }

        $email = $user->email;

        $user->update($attributes);

        $redirect = redirect()->route('admin.users.index');
        if ($user->wasChanged()) {
            $redirect->with('status', 'Пользователь "' . $email . '" был успешно изменен.');
        }
        return $redirect;
    }

    /**
     * Удаление пользователя
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(User $user)
    {
        // Проверка прав доступа
        $this->authorize(User::ABILITY_ADMIN);

        // Нельзя удалять супер-админа
        abort_if($user->isSuperAdmin(), 403);

        // Нельзя удалять куратора, к которому привязаны участники
        if ($user->isCurator() && $user->participants->count()) {
            return redirect()->route('admin.users.index')->with('error', 'Нельзя удалять куратора, к которому привязаны участники.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('status', 'Пользователь "' . $user->email . '" был успешно удален.');
    }

    /**
     * Возвращает список ролей, доступных пользователю
     *
     * @return array
     */
    private function getAvailableRoles(): array
    {
        return ['' => ''] + User::ROLES;
    }

}
