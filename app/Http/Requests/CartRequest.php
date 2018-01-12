<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'  => 'required',
            'email'  => 'required',
            'address'  => 'required',
            'phone'  => 'required'
        ];
    }

    public function message()
    {
        return [
            //
            'name.required' => "Vui long nhap ten",
            'email.required' => "Vui long nhap email",
            'address.required' => "Vui long nhap address",
            'phone.required' => "Vui long nhap phone"
        ];
    }
}
