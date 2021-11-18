<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'nullable',
            'parent_id' => 'nullable',
            'seq' => 'nullable',
            'status' => 'required|int',
            'meta_title' => 'nullable|string',
            'meta_desc' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ];
    }
}
