<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'customer_code' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'address' => 'required|min:3|max:255',
            'phone' => 'required|min:3|max:255',
        ];
    }
}
