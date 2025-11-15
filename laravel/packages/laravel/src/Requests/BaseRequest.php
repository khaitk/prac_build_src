<?php

namespace Laravel\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Laravel\Helpers\ResponseHelper;

class BaseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'string' => 'The :attribute field must be a string.',
            'max' => 'The :attribute field must not exceed :max characters.',
            'min' => 'The :attribute field must be at least :min characters.',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            ResponseHelper::error('Validation failed', 422, $validator->errors())
        );
    }
}
