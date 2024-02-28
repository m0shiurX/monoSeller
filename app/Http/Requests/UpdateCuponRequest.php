<?php

namespace App\Http\Requests;

use App\Models\Cupon;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCuponRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cupon_edit');
    }

    public function rules()
    {
        return [
            'code' => [
                'string',
                'min:3',
                'max:10',
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'valid_till' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'valid_from' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}
