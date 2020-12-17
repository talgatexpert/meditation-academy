<?php

namespace App\Http\Requests;

use App\Rules\ParticipantName;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ParticipantRequest extends FormRequest
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
                Rule::unique('participants', 'name')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                })->ignore(\Auth::guard('participant')->id()),
                new ParticipantName(),

            ],
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


}
