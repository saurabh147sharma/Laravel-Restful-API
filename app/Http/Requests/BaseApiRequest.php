<?php

namespace App\Http\Requests;

use App\Http\Controllers\BaseApiController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * This class is base class for all API request
 * @author Saurabh
 */
class BaseApiRequest extends FormRequest {

    protected function failedValidation(Validator $validator) {
        $response = BaseApiController::errorResponse([],trans('messages.validation_errors'),$validator->errors(),422);
        throw new HttpResponseException($response);
    }

}
