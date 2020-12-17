<?php

namespace App\Rules;

use App\Support\BadWords;
use Illuminate\Contracts\Validation\Rule;

class ParticipantName implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Проверяем имя пользователя на цифры и на плохие слова
        return !preg_match('/^\d+$/', $value) && BadWords::validate($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Недопустимое имя пользователя.';
    }

}
