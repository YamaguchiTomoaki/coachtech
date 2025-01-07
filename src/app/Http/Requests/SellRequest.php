<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
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
            'image' => 'required | max:10000 | mimes:jpg',
            'category' => 'required',
            'condition' => 'required',
            'name' => 'required | string | max:255',
            'description' => 'required | string | max:255',
            'price' => 'required | regex:/^[0-9]+$/',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => '商品画像を選択してください',
            'image.max' => '10MBを超えるファイルは添付できません',
            'image.mimes' => '指定外のファイルは添付できません',
            'category.required' => 'カテゴリーを1つ以上選択してください',
            'condition.required' => '商品の状態を選択してください',
            'name.required' => '商品名を入力してください',
            'name.string' => '商品名を文字列で入力してください',
            'name.max' => '商品名を255文字以内で入力してください',
            'description.required' => '商品の説明を入力してください',
            'description.string' => '商品の説明を文字列で入力してください',
            'description.max' => '商品の説明を255文字以内で入力してください',
            'price.required' => '販売価格を入力してください',
            'price.regex' => '数字を入力してください',
        ];
    }
}
