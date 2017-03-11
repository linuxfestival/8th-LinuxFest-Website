<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Sposnsoring extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sponsor' => 'required|array',
            'sponsoring_method' => 'required',
            'logo' => 'mimetypes:image/gif,image/png,image/jpeg',
        ];
    }

    public static function getRules(){
        return [
            'sponsor' => 'required|array',
            'sponsoring_method' => 'required',
            'logo' => 'mimetypes:image/gif,image/png,image/jpeg',
        ];
    }
}
