<?php

namespace App\Http\Requests\Tour;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            //
            'title.vi' => 'requied|max:255',
            'title.vi' => 'required|max:255',
            'brief.vi' => 'required|max:255',
            'title.en' => 'nullable|max:255',
            'brief.en' => 'nullable|max:255',
            'content.vi' => 'required',
            'start_day' => 'required',
            'end_day' => 'required'
        ];
    }
}
