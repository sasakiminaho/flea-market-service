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
            'name' => ['required','string', '50'],
            'price' => ['required', 'integer'],
            'state' => ['required', 'string', '50'],
            'explanation' => ['required', 'text','500'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください',
            'name.string' => '商品名を文字列で入力してください',
            'name.max:50' => '商品名を50文字以内で入力してください',
            'price.required' => '販売価格を入力してください',
            'price.integer' => '販売価格を数字で入力してください',
            'state.required' => '商品の状態を入力してください',
            'state.string' => '商品の状態を文字列で入力してください',
            'state.max|50' => '商品の状態を50文字以内で入力してください',
            'explanation.required' => '商品の説明を入力してください',
            'state.text' => '商品の説明を文字列で入力してください',
            'state.max|500' => '商品の状態を500文字以内で入力してください',
        ];
    }
}
