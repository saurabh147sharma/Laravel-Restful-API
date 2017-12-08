<?php

namespace App\Http\Requests;

class RegisterUserRequest extends BaseApiRequest   {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:25',
            'role' => 'required|in:2,3',
            'deviceId' => 'required',
            'deviceType' => 'required|in:1,2',
            'deviceToken' => 'sometimes'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'You first name and last name combination is required'
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