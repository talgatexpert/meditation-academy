<?php

namespace App\Http\Requests\Steps;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LikeRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Лайкать комментарии могут авторизованные участники или гости, у которых есть гостевой UUID
        return ($this->participant_id ?? $this->guest_uuid);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment_id' => [
                'bail',
                'required',
                'integer',
                Rule::exists('comments', 'id'),
            ],
            'participant_id' => [
                'bail',
                'required_without:guest_uuid',
                'integer',
                Rule::exists('participants', 'id'),
            ],
            'guest_uuid' => 'bail|required_without:participant_id|uuid',
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
            'comment_id.*' => 'Нельзя лайкнуть этот комментарий',
            'participant_id.*' => 'Вы не можете лайкнуть этот комментарий',
            'guest_uuid.*' => 'Вы не можете лайкнуть этот комментарий',
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
        // Если участник авторизован, добавляем в запрос его ID, в противном случае добавляем в запрос гостевой UUID
        if (($guard = \Auth::guard('participant'))->check()) {
            $this->merge(['participant_id' => $guard->id()]);
        } else {
            $this->merge(['guest_uuid' => $this->session()->get('guest_uuid')]);
        }
    }

}
