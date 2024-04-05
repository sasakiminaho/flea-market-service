<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'brand' => 'required|string|max:50',
            'price' => 'required|integer',
            'state' => 'required|string|max:50',
            'explanation' => 'required|string|max:500',
            'category' => 'required|string|max:20'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください',
            'name.string' => '商品名を文字列で入力してください',
            'name.max' => '商品名を50文字以内で入力してください',
            'brand.required' => 'ブランド名を入力してください',
            'brand.string' => 'ブランド名を文字列で入力してください',
            'brand.max' => 'ブランド名を50文字以内で入力してください',
            'price.required' => '販売価格を入力してください',
            'price.integer' => '販売価格を数字で入力してください',
            'state.required' => '商品の状態を入力してください',
            'state.string' => '商品の状態を文字列で入力してください',
            'state.max' => '商品の状態を50文字以内で入力してください',
            'explanation.required' => '商品の説明を入力してください',
            'state.string' => '商品の説明を文字列で入力してください',
            'state.max' => '商品の状態を500文字以内で入力してください',
            'category.required' => 'カテゴリーを入力してください',
            'category.required' => 'カテゴリーを入力してください',
            'category.string' => 'カテゴリーを文字列で入力してください',
            'category.max' => 'カテゴリーを20文字以内で入力してください',
        ];
    }
}
