<?php

namespace Laravel\Rules;

class CustomNameRule extends BaseRule
{
    public function passes($attribute, $value)
    {
        return strlen($value) >= 3 && !preg_match('/[0-9]/', $value);
    }

    protected function getDefaultMessage()
    {
        return 'The name must be at least 3 characters and contain no numbers.';
    }
}
