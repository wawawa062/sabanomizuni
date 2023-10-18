<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
    public function rules()
    {
        return [
            'menu. name_menu' => 'required|string|max:100',
            'menu. content_menu' => 'required|string|max:300'
        ];
    }
}
