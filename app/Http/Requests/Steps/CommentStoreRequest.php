<?php

namespace App\Http\Requests\Steps;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CommentStoreRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Определяем, это ответ куратора на комментарий или участник пишет
        if ($this->curator_reply) {
            // Отвечать на комментарий может только авторизованный куратор
            return (\Auth::check() && (\Auth::user()->isCurator()  || \Auth::user()->isManager()));
        } else {
            $guard = \Auth::guard('participant');

            // Определяем, это ответ на комментарий или отправка отчета
            if ($this->parent_id) {
                // Отвечать на комментарий может только авторизованный участник, которому доступен указанный шаг
                return $guard->check() && $guard->user()->isStepAvailable($this->step ?? 0);
            } else {
                // Отправлять отчет может только авторизованный участник, который ранее еще не отправлял отчет на своем текущем шаге
                return $guard->check() && !$guard->user()->reportedAtStep($guard->user()->step);
            }
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'body' => 'bail|required|string|max:2000',
        ];
        if ($this->request->has('comment')){
            $rules['comment'] = 'bail|required|string|max:2000';
        }


        if ($this->curator_reply || $this->parent_id) {
            // При ответе на комментарий, родительский комментарий должен существовать
            $rules[$this->curator_reply ? 'curator_reply' : 'parent_id'] = [
                'bail',
                'required',
                'integer',
                Rule::exists('comments', 'id')->where('step', $this->step ?? 0),
            ];
        }

        return $rules;
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
            'parent_id.*' => 'Нельзя добавить ответ к этому комментарию',
            'curator_reply.*' => 'Нельзя добавить ответ к этому комментарию',
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
