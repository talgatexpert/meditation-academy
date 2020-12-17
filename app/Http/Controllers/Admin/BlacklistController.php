<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BlacklistRequest;
use App\Models\Blacklist;
use App\Models\User;
use Illuminate\Http\Request;

class BlacklistController extends Controller
{

    /**
     * Черный список участников
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $blacklist = Blacklist::get();

        return view('pages.admin.blacklist.index', compact('blacklist'));
    }

    /**
     * Форма добавления нового участника в черный список
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $blacklist = null;

        return view('pages.admin.blacklist.form', compact('blacklist'));
    }


    /**
     * Добавление нового участника в черный список
     *
     * @param BlacklistRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlacklistRequest $request)
    {
        $blacklist = Blacklist::create($request->validated());

        return redirect()->route('admin.blacklist.index')->with('status', 'Участник "' . $blacklist->email . '" был успешно добавлен в черный список.');
    }

    /**
     * Форма редактирования участника в черном списке
     *
     * @param Blacklist $blacklist
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Blacklist $blacklist)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        return view('pages.admin.blacklist.form', compact('blacklist'));
    }

    /**
     * Редактирование участника в черном списке
     *
     * @param BlacklistRequest $request
     * @param Blacklist $blacklist
     * @return \Illuminate\Http\Response
     */
    public function update(BlacklistRequest $request, Blacklist $blacklist)
    {
        $email = $blacklist->email;
        $blacklist->update($request->validated());

        $redirect = redirect()->route('admin.blacklist.index');
        if ($blacklist->wasChanged()) {
            $redirect->with('status', 'Участник "' . $email . '" был успешно изменен в черном списке.');
        }
        return $redirect;
    }

    /**
     * Удаление участника из черного списка
     *
     * @param Blacklist $blacklist
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Blacklist $blacklist)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $blacklist->delete();

        return redirect()->route('admin.blacklist.index')->with('status', 'Участник "' . $blacklist->email . '" был успешно удален из черного списка.');
    }

}
