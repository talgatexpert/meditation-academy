<?php

namespace App\Http\Requests;

use App\Models\Participant;
use App\Rules\ParticipantName;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
                'bail',
                'required',
                'string',
                'min:2',
                'max:20',
                Rule::unique('participants')->where(function ($query) {
                    return $query->whereNotNull('deleted_at');
                })->ignore($this->request->get('name'), 'name')->whereNull('deleted_at'),
                new ParticipantName(),

            ],
            'email' => 'bail|required|email:filter|max:128',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email' => 'Пожалуйста, введите корректный адрес электронной почты',
            'max' => 'Пожалуйста, введите не более :max символов',
            'min' => 'Пожалуйста, введите не менее :min символов',
            'required' => 'Это поле необходимо заполнить',
            'string' => 'Это поле должно быть строкой',
            'unique' => 'Это имя уже занято'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        // Email всегда в нижнем регистре
        $this->merge([
            'email' => \Str::lower($this->email),
        ]);
    }

}
