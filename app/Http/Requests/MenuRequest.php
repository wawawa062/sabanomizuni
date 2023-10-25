<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
    public function rules()
    {
        return [
            'menu.menu_name' => 'required|string|max:100',
            'menu.menu_content' => 'required|string|max:300'
        ];
    }
}
