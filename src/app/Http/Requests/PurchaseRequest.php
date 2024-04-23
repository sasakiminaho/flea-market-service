<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
            'item_id' => ['required'],
            'shipping_address_id' => ['required'],
        ];
    }

    public function messages() {
        return [
            'item_id.required' => '商品を選択してください',
            'shipping_address_id.required' => 'お届け先住所を入力してください',
        ];
    }
}
