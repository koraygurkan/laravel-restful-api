<?php

namespace App\Http\Requests;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\ResultType;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'email'=> 'required|email|unique:users',
            'name'=>'required|string|max:50',
            'password'=>'required'
        ];
    }


    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     */
    protected function failedValidation(Validator $validator)
    {

            $errors=(new ValidationException($validator))->errors();

            throw new HttpResponseException(
                (new ApiController)->apiResponse(ResultType::Error,$errors,'Validation Error',422)
            );


    }
}
