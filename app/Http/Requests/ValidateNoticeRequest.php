<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidateNoticeRequest extends Request
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
            'provider_id' => 'required',
            'infringing_title' => 'required',
            'infringing_link' => 'required|url',
            'original_link' => 'required|url',
        ];
    }
}
