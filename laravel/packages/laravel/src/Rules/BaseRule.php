<?php

namespace Laravel\Rules;

use Illuminate\Contracts\Validation\Rule;

abstract class BaseRule implements Rule
{
    protected $message;

    public function __construct($message = null)
    {
        $this->message = $message;
    }

    public function message()
    {
        return $this->message ?? $this->getDefaultMessage();
    }

    abstract protected function getDefaultMessage();
}
