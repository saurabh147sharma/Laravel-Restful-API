<?php

namespace App\Http\Requests;

class LoginRequest extends BaseApiRequest   {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email' => 'required',
            'password' => 'required',
            'deviceId' => 'required',
            'deviceType' => 'required',
            'deviceToken' => 'sometimes'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

}