@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.tracking.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.trackings.update", [$tracking->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="header_script">{{ trans('cruds.tracking.fields.header_script') }}</label>
                <textarea class="form-control {{ $errors->has('header_script') ? 'is-invalid' : '' }}" name="header_script" id="header_script">{{ old('header_script', $tracking->header_script) }}</textarea>
                @if($errors->has('header_script'))
                    <div class="invalid-feedback">
                        {{ $errors->first('header_script') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.tracking.fields.header_script_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="footer_script">{{ trans('cruds.tracking.fields.footer_script') }}</label>
                <textarea class="form-control {{ $errors->has('footer_script') ? 'is-invalid' : '' }}" name="footer_script" id="footer_script">{{ old('footer_script', $tracking->footer_script) }}</textarea>
                @if($errors->has('footer_script'))
                    <div class="invalid-feedback">
                        {{ $errors->first('footer_script') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.tracking.fields.footer_script_helper') }}</span>
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
