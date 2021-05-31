<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualProductStoreRequest extends FormRequest
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
            'product_id' => 'int|required|exists:products,id|unique:actual_products,product_id'
        ];
    }
}
