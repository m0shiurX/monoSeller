<?php

namespace App\Http\Requests;

use App\Models\Tracking;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTrackingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tracking_create');
    }

    public function rules()
    {
        return [];
    }
}
