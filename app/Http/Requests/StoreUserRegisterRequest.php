<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'proof_img' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg',
            ],
            'email' => [
                'required', 
                'string', 
                'email',
                'max:255', 
                'unique:users'
            ],
        ];
    }
}
