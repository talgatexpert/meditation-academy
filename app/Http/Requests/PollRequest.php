<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PollRequest extends FormRequest
{

    // Доступные опросы
    private const NAMES = ['reasons', 'steps'];

    // Доступные варианты в каждом из опросов
    private const OPTIONS = [
        'reasons' => ['effectiveness', 'emotional_stability', 'positive_experiences', 'self_awareness'],
        'steps' => ['researches', 'experience', 'stories', 'techniques', 'philosophy', 'facts', 'other'],
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->name === 'steps') {
            // Участвовать в опросах на страницах заданий может только авторизованный участник
            return \Auth::guard('participant')->check();
        }
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
                Rule::in(self::NAMES),
            ],
            'options' => 'bail|required|array|min:1|max:7',
            'options.*' => [
                'bail',
                'required',
                'string',
                Rule::in(\Arr::get(self::OPTIONS, $this->name, [])),
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
            'name.*' => 'Неправильные данные',
            'options.*' => 'Неправильные данные',
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
        $options = $this->options;

        if (is_array($options)) {
            if ($this->name === 'reasons') {
                // Опрос в истории успеха участников может содержать только один вариант
                $options = array_slice($options, 0, 1);
            } else {
                // Не должно быть повторяющихся вариантов
                $options = array_unique($options);
            }
        }

        $this->merge([
            'options' => $options,
        ]);
    }

}
