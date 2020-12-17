<?php

namespace App\Http\Requests\Admin;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Проверка прав доступа
        return \Gate::allows(User::ABILITY_ADMIN);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => [
                'required',
                'email:filter',
                'max:64',
                Rule::unique('users')->ignore($this->user),
            ],
            'name' => 'required|string|max:32',
            'role' => [
                'required',
                'integer',
                Rule::in(array_keys(User::ROLES)),
            ],
            'password' => ($this->route()->getActionMethod() == 'store' ? 'required' : 'nullable') . '|confirmed|min:6|regex:#^(?=.*[a-zA-Z].*[a-zA-Z])(?=.*[\d].*[\d]).*$#',
            'active' => 'required|boolean'
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
        return [];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $active = $this->active ?? 0;
        $role = $this->role;

        // Редактирование пользователя
        if ($this->route()->getActionMethod() == 'update') {
            // Супер-админу нельзя изменить роль и отключить его
            if ($this->user->isSuperAdmin()) {
                $active = 1;
                $role = User::ROLE_ADMIN;
            }

            // Нельзя изменить роль или включить\отключить самого себя
            if ($this->user->id === \Auth::id()) {
                $active = $this->user->active;
                $role = $this->user->role;
            }
        }

        $this->merge([
            'active' => $active,
            'role' => $role,
        ]);
    }

}
