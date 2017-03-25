<?php
/**
 * Created by PhpStorm.
 * User: Novin Pendar
 * Date: 3/19/2017
 * Time: 9:39 AM
 */

namespace App\Http\Requests;


class Presentering extends Request
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
            'presenter_name' => 'required',
            'presenter_url' => 'required',
            'presenter_email' => 'required',
            'presenter_phone' => 'required',
            'presenter_avatar' => 'mimetypes:image/gif,image/png,image/jpeg,image/jpg',
            'presenter_bio' => 'required',
        ];
    }
    public static function getRules(){
        return [
            'presenter_name' => 'required',
            'presenter_url' => 'required',
            'presenter_email' => 'required',
            'presenter_phone' => 'required',
            'presenter_avatar' => 'mimetypes:image/gif,image/png,image/jpeg,image/jpg',
            'presenter_bio' => 'required',
        ];
    }
}