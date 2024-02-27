@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.cupon.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cupons.update", [$cupon->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.cupon.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $cupon->code) }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cupon.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.cupon.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $cupon->description) }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cupon.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="valid_till">{{ trans('cruds.cupon.fields.valid_till') }}</label>
                <input class="form-control date {{ $errors->has('valid_till') ? 'is-invalid' : '' }}" type="text" name="valid_till" id="valid_till" value="{{ old('valid_till', $cupon->valid_till) }}" required>
                @if($errors->has('valid_till'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valid_till') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cupon.fields.valid_till_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="valid_from">{{ trans('cruds.cupon.fields.valid_from') }}</label>
                <input class="form-control date {{ $errors->has('valid_from') ? 'is-invalid' : '' }}" type="text" name="valid_from" id="valid_from" value="{{ old('valid_from', $cupon->valid_from) }}" required>
                @if($errors->has('valid_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valid_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.cupon.fields.valid_from_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection