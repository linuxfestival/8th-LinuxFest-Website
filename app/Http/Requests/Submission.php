<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Submission extends Request
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
            'attendance' => 'array|required',
            'subject' => 'required',
            'resume' => 'mimetypes:application/pdf',
            'abstract-file' => 'mimetypes:application/pdf',
        ];
    }

    /**
     * Same as the rules method.
     *
     * @return array
     */
    public static function getRules() {
        return [
            'attendance' => 'required|array',
            'subject' => 'required',
            'resume' => 'mimetypes:application/pdf',
            'abstract-file' => 'mimetypes:application/pdf',
        ];
    }
}
