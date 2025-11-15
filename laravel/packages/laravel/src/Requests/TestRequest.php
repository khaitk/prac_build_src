<?php

namespace Laravel\Requests;

use Laravel\Rules\CustomNameRule;

class TestRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', new CustomNameRule()],
            'description' => 'nullable|string'
        ];
    }
}
