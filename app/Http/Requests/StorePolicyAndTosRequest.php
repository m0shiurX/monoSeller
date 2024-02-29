<?php

namespace App\Http\Requests;

use App\Models\PolicyAndTos;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePolicyAndTosRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('policy_and_tos_create');
    }

    public function rules()
    {
        return [];
    }
}
