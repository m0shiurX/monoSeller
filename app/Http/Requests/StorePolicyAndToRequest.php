<?php

namespace App\Http\Requests;

use App\Models\PolicyAndTo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePolicyAndToRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('policy_and_to_create');
    }

    public function rules()
    {
        return [];
    }
}
