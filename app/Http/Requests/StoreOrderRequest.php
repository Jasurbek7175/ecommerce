<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        return [
            'delivery_method_id' => 'required|numeric',
            'payment_type_id' => 'required|numeric',
            'product' => 'required',
            'product.*.product_id' => 'required|numeric',
            'product.*.quantity' => 'required|numeric',
            'product.*.stock_id' => 'required|numeric',
            'comment' => 'nullable|max:500'
        ];
    }
}
