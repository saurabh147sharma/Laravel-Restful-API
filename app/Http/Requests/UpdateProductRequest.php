<?php

namespace App\Http\Requests;

class UpdateProductRequest extends BaseApiRequest   {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'productId' => 'required|integer',
            'productName' => 'required'
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