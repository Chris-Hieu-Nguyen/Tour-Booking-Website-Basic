<?php

namespace App\Http\Requests\Area;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title.vi' => 'required|max:100',
            'title.en' => 'required|max:100',
        ];
    }
}
