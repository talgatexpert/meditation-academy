<?php

namespace App\Http\Controllers\Admin\Templates;

use App\Http\Controllers\Admin\Controller;
use App\Http\Requests\Admin\Templates\EmailRequest;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    /**
     * Шаблоны писем
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $templates = Template::get(['id', 'name', 'subject', 'sender', 'updated_at']);

        return view('pages.admin.templates.email.index', compact('templates'));
    }

    /**
     * Форма добавления нового шаблона письма
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $email = null;
        $names = $this->getAvailableNames();

        return view('pages.admin.templates.email.form', compact('email', 'names'));
    }


    /**
     * Добавление нового шаблона письма
     *
     * @param EmailRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {
        $email = Template::create($request->validated());

        return redirect()->route('admin.templates.email.index')->with('status', 'Шаблон письма "' . $email->full_name . '" был успешно создан.');
    }

    /**
     * Предпросмотр готового шаблона письма
     *
     * @param Template $email
     * @return \Illuminate\Http\Response
     */
    public function show(Template $email)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $subject = $email->getSubject(true);
        $body = $email->getBody(true);

        return view('emails.master', compact('subject', 'body'));
    }

    /**
     * Форма редактирования шаблона письма
     *
     * @param Template $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $email)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $names = $this->getAvailableNames();

        return view('pages.admin.templates.email.form', compact('email', 'names'));
    }

    /**
     * Редактирование шаблона письма
     *
     * @param EmailRequest $request
     * @param Template $email
     * @return \Illuminate\Http\Response
     */
    public function update(EmailRequest $request, Template $email)
    {
        $fullName = $email->full_name;
        $email->update($request->validated());

        $redirect = redirect()->route('admin.templates.email.index');
        if ($email->wasChanged()) {
            $redirect->with('status', 'Шаблон письма "' . $fullName . '" был успешно изменен.');
        }
        return $redirect;
    }

    /**
     * Удаление шаблона письма
     *
     * @param Template $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $email)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $email->delete();

        return redirect()->route('admin.templates.email.index')->with('status', 'Шаблон письма "' . $email->full_name . '" был успешно удален.');
    }

    /**
     * Предпросмотр шаблона письма
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function preview(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $email = new Template();
        $subject = $email->resolveVariables($request->subject, true);
        $body = $email->resolveVariables($request->body, true);

        // Генерируем контент для предпросмотра и сохраняем его во временный файл
        \Storage::put($fileName = 'preview/' . uniqid() . '.html', view('emails.master', compact('subject', 'body'))->render());

        return \Storage::url($fileName);
    }

    /**
     * Возвращает список доступных названий шаблонов писем
     *
     * @return array
     */
    private function getAvailableNames(): array
    {
        return ['' => ''] + Template::NAMES;
    }

}
