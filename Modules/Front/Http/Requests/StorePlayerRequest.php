<?php

namespace Modules\Front\Http\Requests;

use App\Rules\Tel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StorePlayerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'kana' => 'required|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone_number' => [
                'nullable',
                'string',
                new Tel(),
            ],
            'email' => 'required|email',
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::defaults()
            ]
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => '名前',
            'contents' => 'ふりがな',
            'company_name' => '貴社名',
            'postal_code' => '郵便番号',
            'address' => '住所',
            'phone_number' => '電話番号',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
        ];
    }
}
