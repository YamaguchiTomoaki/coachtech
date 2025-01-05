<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'max:10000',
            'name' => 'required | string | max:255',
            'postcode' => 'required | regex:/^[0-9]{7}+$/',
            'address' => 'required | string | max:255',
            'building' => 'nullable |string | max:255',
        ];
    }

    public function messages()
    {
        return [
            'image.max' => '10MBを超えるファイルは添付できません',
            'name.required' => 'ユーザー名を入力してください',
            'name.string' => 'ユーザー名を文字列で入力してください',
            'name.max' => 'ユーザー名を255文字以内で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => 'ハイフン無しで7桁の郵便番号を入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字列で入力してください',
            'building.string' => '建物名を文字列で入力してください',
            'building.max' => '建物名を255文字以内で入力してください',
        ];
    }
}
