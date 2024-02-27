<?php

namespace App\Http\Requests;

use App\Models\Customer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'min:5',
                'max:30',
                'required',
            ],
            'phone' => [
                'string',
                'min:8',
                'max:18',
                'required',
            ],
            'address' => [
                'string',
                'min:8',
                'max:120',
                'required',
            ],
        ];
    }
}
