<?php

namespace App\Http\Requests;

use App\Models\SalesPage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSalesPageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sales_page_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
            'product_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
