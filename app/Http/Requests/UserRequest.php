<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch ($this->method()) {
            // CREATE
            case 'POST':
                // UPDATE
            case 'PUT':
            case 'PATCH':
                {

                    switch ($this->route) {
                        case 'profile':
                            return [
                                'route'        => 'required',
                                'nickname'     => 'between:2,10|regex:/^[一-龥A-Za-z0-9\-\__]+$/',
                                'introduction' => 'max:80',
                                'avatar'       => 'mimes:jpeg,bmp,png,gif,jpg'
                            ];
                        case 'preference':
                            return [

                            ];
                        case 'security':
                            return [

                            ];
                    }

                }
            case 'GET':
            case 'DELETE':
            default:
                {
                    return [];
                };
        }

    }

    public function messages()
    {
        return [
            'nickname.regex'   => '昵称只支持英文，数字，下划线',
            'nickname.between' => '昵称长度必须在3-25之间',
            'avatar.mimes'     => '头像必须是 jpeg,jpg,gif,png格式的图片',
            #'avatar.dimensions'=>'头像不够清晰,高度和宽度必须在200px以上',
        ];
    }
}
