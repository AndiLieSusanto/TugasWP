<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class containStreet implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $mustBeStreet = substr($value, -6);
        return $mustBeStreet == 'Street';
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute must contain Street at the end';
    }
}
