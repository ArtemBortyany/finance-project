<?php

namespace App\Http\Requests\Transaction;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'wallet_id' => ['sometimes', 'exists:wallets,id'],
            'type' => ['sometimes', 'in:increment,decrement'],
            'amount' => ['sometimes', 'gt:0', 'numeric'],
            'comment' => ['nullable', 'string', 'max:255'],
            'category_id' => ['sometimes', 'exists:categories,id']
        ];
    }
}
