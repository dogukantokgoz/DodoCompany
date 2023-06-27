<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title' => 'required',
            'content0' => 'required',
            'content1' => 'required',
            'content2' => 'required',
            'content3' => 'required',
            'step' => 'required',
            'step1' => 'required',
            'step2' => 'required',
            'step3' => 'required',
            'step4' => 'required',
            'step5' => 'required',
        ];
    }
}
