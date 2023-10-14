<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreSpeakerRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('permission_access');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'img' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg',
            ]
        ];
    }
}
