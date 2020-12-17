<?php

namespace App\Http\Controllers\Admin\Templates;

use App\Http\Controllers\Admin\Controller;
use App\Http\Requests\Admin\Templates\MessageRequest;
use App\Models\MessageTemplate;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    /**
     * Шаблоны сообщений
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $templates = MessageTemplate::get(['id', 'name', 'title', 'updated_at']);

        return view('pages.admin.templates.message.index', compact('templates'));
    }

    /**
     * Форма добавления нового шаблона сообщения
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $message = null;
        $names = $this->getAvailableNames();

        return view('pages.admin.templates.message.form', compact('message', 'names'));
    }


    /**
     * Добавление нового шаблона сообщения
     *
     * @param MessageRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        $message = MessageTemplate::create($request->validated());

        return redirect()->route('admin.templates.message.index')->with('status', 'Шаблон сообщения "' . $message->full_name . '" был успешно создан.');
    }

    /**
     * Предпросмотр готового шаблона сообщения
     *
     * @param MessageTemplate $message
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(MessageTemplate $message, Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $title = $message->getTitle(true);
        $body = $message->getBody(true);

        return view('pages.admin.templates.message.preview', compact('title', 'body'));
    }

    /**
     * Форма редактирования шаблона сообщения
     *
     * @param MessageTemplate $message
     * @return \Illuminate\Http\Response
     */
    public function edit(MessageTemplate $message)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $names = $this->getAvailableNames();

        return view('pages.admin.templates.message.form', compact('message', 'names'));
    }

    /**
     * Редактирование шаблона сообщения
     *
     * @param MessageRequest $request
     * @param MessageTemplate $message
     * @return \Illuminate\Http\Response
     */
    public function update(MessageRequest $request, MessageTemplate $message)
    {
        $fullName = $message->full_name;
        $message->update($request->validated());

        $redirect = redirect()->route('admin.templates.message.index');
        if ($message->wasChanged()) {
            $redirect->with('status', 'Шаблон сообщения "' . $fullName . '" был успешно изменен.');
        }
        return $redirect;
    }

    /**
     * Удаление шаблона сообщения
     *
     * @param MessageTemplate $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessageTemplate $message)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $message->delete();

        return redirect()->route('admin.templates.message.index')->with('status', 'Шаблон сообщения "' . $message->full_name . '" был успешно удален.');
    }

    /**
     * Предпросмотр шаблона сообщения
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function preview(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]), 403);

        $message = new MessageTemplate();
        $title = $message->resolveVariables($request->title, true);
        $body = $message->resolveVariables($request->body, true);

        // Генерируем контент для предпросмотра и сохраняем его во временный файл
        \Storage::put($fileName = 'preview/' . uniqid() . '.html', view('pages.admin.templates.message.preview', compact('title', 'body'))->render());

        return \Storage::url($fileName);
    }

    /**
     * Возвращает список доступных названий шаблонов сообщений
     *
     * @return array
     */
    private function getAvailableNames(): array
    {
        return ['' => ''] + MessageTemplate::NAMES;
    }

}
