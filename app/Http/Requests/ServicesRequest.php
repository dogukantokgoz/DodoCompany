<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'data_title' => 'required|string',
            'data_content' => 'required|string',
            'data_icon' => 'string',
            'call_title' => 'string',
            'call_content' => 'string',
            'features_title' => 'required|string',
            'features_content' => 'required|string',
            'features_icon' => 'string',
            'foto' => 'string',
            'counts_title' => 'required|string',
            'counts_content' => 'required|string'
        ];
    }
}
