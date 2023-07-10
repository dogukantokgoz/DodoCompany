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
            'title' => 'string',
            'description' => 'string',
            'data_title' => 'string',
            'data_content' => 'string',
            'data_icon' => 'string',
            'call_title' => 'string',
            'call_content' => 'string',
            'features_title' => 'string',
            'features_content' => 'string',
            'features_icon' => 'string',
            'foto' => 'string',
            'counts_title' => 'string',
            'counts_content' => 'string'
        ];
    }
}
