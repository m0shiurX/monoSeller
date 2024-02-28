<?php

namespace App\Http\Requests;

use App\Models\PolicyAndTo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePolicyAndToRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('policy_and_to_edit');
    }

    public function rules()
    {
        return [];
    }
}
