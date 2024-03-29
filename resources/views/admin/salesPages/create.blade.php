@extends('layouts.admin')
@section('content')
<div class="row">
<div class="card col-lg-6">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.salesPage.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sales-pages.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.salesPage.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.salesPage.fields.title_helper') }}</span>
            </div>
            {{-- Select product --}}
            <div class="form-group">
                <label class="required" for="product_id">{{ trans('cruds.salesPage.fields.product') }}</label>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-4">

                        <label>
                        <input type="radio" name="product_id" selected checked class="card-input-element" />

                            <div class="card card-default card-input">
                                <img  class="card-img-top" alt="..." src="{{ asset('./assets/image.jpg') }}">
                            <div class="card-header">Product A</div>
                            </div>
                        </label>

                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4">

                        <label>
                        <input type="radio" name="product_id" class="card-input-element" />

                            <div class="card card-default card-input">
                                <img  class="card-img-top" alt="..." src="{{ asset('./assets/image.jpg') }}">
                            <div class="card-header">Product B</div>
                            </div>
                        </label>

                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4">

                        <label>
                        <input type="radio" name="product_id" class="card-input-element" />

                            <div class="card card-default card-input">
                                <img  class="card-img-top" alt="..." src="{{ asset('./assets/image.jpg') }}">
                            <div class="card-header">Product C</div>
                            </div>
                        </label>

                    </div>
                </div>
            </div>
            {{-- End of product selection --}}
            <div class="form-group">
                <label class="required" for="product_id">{{ trans('cruds.salesPage.fields.product') }}</label>
                <select class="form-control select2 {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id" id="product_id" required>
                    @foreach($products as $id => $entry)
                        <option value="{{ $id }}" {{ old('product_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('product'))
                    <div class="invalid-feedback">
                        {{ $errors->first('product') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.salesPage.fields.product_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="template_id">{{ trans('cruds.salesPage.fields.template') }}</label>
                <select class="form-control select2 {{ $errors->has('template') ? 'is-invalid' : '' }}" name="template_id" id="template_id" required>
                    @foreach($templates as $id => $entry)
                        <option value="{{ $id }}" {{ old('template_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('template'))
                    <div class="invalid-feedback">
                        {{ $errors->first('template') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.salesPage.fields.template_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="header_script">{{ trans('cruds.salesPage.fields.header_script') }}</label>
                <textarea class="form-control {{ $errors->has('header_script') ? 'is-invalid' : '' }}" name="header_script" id="header_script">{{ old('header_script') }}</textarea>
                @if($errors->has('header_script'))
                    <div class="invalid-feedback">
                        {{ $errors->first('header_script') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.salesPage.fields.header_script_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="footer_script">{{ trans('cruds.salesPage.fields.footer_script') }}</label>
                <textarea class="form-control {{ $errors->has('footer_script') ? 'is-invalid' : '' }}" name="footer_script" id="footer_script">{{ old('footer_script') }}</textarea>
                @if($errors->has('footer_script'))
                    <div class="invalid-feedback">
                        {{ $errors->first('footer_script') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.salesPage.fields.footer_script_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>
<div class="card col-lg-5 ml-3">
    <div class="card-header">
        Edit template Data
    </div>
    <div class="card-body">
        <div class="row">
        </div>
    </div>
</div>
</div>


@endsection
