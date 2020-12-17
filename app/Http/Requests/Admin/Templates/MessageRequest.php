<?php

namespace App\Http\Requests\Admin\Templates;

use App\Models\MessageTemplate;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MessageRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Проверка прав доступа
        return \Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::in(array_keys(MessageTemplate::NAMES)),
                Rule::unique('message_templates')->ignore($this->message),
            ],
            'title' => 'required|string|max:128',
            'body' => 'required|string|max:65535',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => '"Название шаблона"',
            'title' => '"Заголовок сообщения"',
            'body' => '"Тело сообщения"',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        // ...
    }

}
