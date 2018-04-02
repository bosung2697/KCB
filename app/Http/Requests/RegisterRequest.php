<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'phone' => 'required|string|min:10|max:11|unique:users',
            'birth'=>'required|date',
            'gender'=> 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:10|max:20|confirmed',

        ];
    }
    public function messages(){
        return [
            'required'=>':attribute은(는) 필수 입력 항목입니다.',
            'unique:users'=>'중복된 항목입니다. 다르게 입력해주세요.',
            'password.confirmed'=>'비밀번호와 비밀번호 확인에 입력하신 항목이 다릅니다. 다시 입력해주세요.',
            'min'=> ':attribute은(는) 최소 :min 글자 이상이 필요합니다.',
            'max'=> ':attribute은(는) 최대 :max 글자까지만 입력하실 수 있습니다.'
        ];
    }
    public function attributes(){
        return[
            'name'=>'이름',
            'username'=>'아이디',
            'phone'=>'전화번호',
            'email'=>'E-mail 주소',
            'gender'=>'성별',
            'birth'=>'생년월일',
            'password'=>'비밀번호',
        ];
    }
}
