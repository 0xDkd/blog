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
                                'nickname'     => 'between:2,10|regex:/^[一-龥A-Za-z0-9\-\__]+$/',
                                'introduction' => 'max:80',
                                'avatar'       => 'mimes:jpeg,bmp,png,gif,jpg',
                            ];
                        case 'preference':
                            return [

                            ];
                        case 'security':
                            return [
                                'password' => 'required|confirmed|between:6,32',
                            ];
                        case 'cover':
                            return [
                                //cover 的验证不能使用 | 所以移动到了控制器里面使用 preg_match 进行验证
                                'cover' => 'required'
                            ];
                        default :
                            return [];

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
            'nickname.regex'     => '昵称中不能有空格和其它特殊符号',
            'nickname.between'   => '昵称长度必须在3-25之间',
            'avatar.mimes'       => '头像必须是 jpeg,jpg,gif,png格式的图片',
            'cover.required'     => '封面链接不能为空',
            'password.required'  => '密码不能为空',
            'password.confirmed' => '两次密码必须相同',
            #'avatar.dimensions'=>'头像不够清晰,高度和宽度必须在200px以上',
        ];
    }
}
