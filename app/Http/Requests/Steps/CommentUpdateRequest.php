<?php

namespace App\Http\Requests\Steps;

use Illuminate\Foundation\Http\FormRequest;

class CommentUpdateRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Редактировать комментарий может только его владелец
        return $this->comment->canBeEditedByOwner();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'bail|required|string|max:2000',
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
            'max' => 'Пожалуйста, введите не более :max символов',
            'required' => 'Это поле необходимо заполнить',
            'string' => 'Это поле должно быть строкой',
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
        // ...
    }

}
