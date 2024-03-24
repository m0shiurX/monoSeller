@extends('layouts.admin')
@section('content')

<div class="row">
<div class="card col mr-3">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.salesPage.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sales-pages.update", [$salesPage->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.salesPage.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $salesPage->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.salesPage.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="slug">{{ trans('cruds.salesPage.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $salesPage->slug) }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.salesPage.fields.slug_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="product_id">{{ trans('cruds.salesPage.fields.product') }}</label>
                <select class="form-control select2 {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id" id="product_id" required>
                    @foreach($products as $id => $entry)
                        <option value="{{ $id }}" {{ (old('product_id') ? old('product_id') : $salesPage->product->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                        <option value="{{ $id }}" {{ (old('template_id') ? old('template_id') : $salesPage->template->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <textarea class="form-control {{ $errors->has('header_script') ? 'is-invalid' : '' }}" name="header_script" id="header_script">{{ old('header_script', $salesPage->header_script) }}</textarea>
                @if($errors->has('header_script'))
                    <div class="invalid-feedback">
                        {{ $errors->first('header_script') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.salesPage.fields.header_script_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="footer_script">{{ trans('cruds.salesPage.fields.footer_script') }}</label>
                <textarea class="form-control {{ $errors->has('footer_script') ? 'is-invalid' : '' }}" name="footer_script" id="footer_script">{{ old('footer_script', $salesPage->footer_script) }}</textarea>
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
<div class="card col">
    <div class="card-header">
        Select Template
    </div>
    <div class="card-body d-flex flex-wrap">
        <div class="card text-bg-primary mb-3 mr-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Secondary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        <div class="card text-bg-success mb-3 mr-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        <div class="card text-bg-warning mb-3 mr-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Warning card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        <div class="card text-bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Info card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        <div class="card text-bg-light mb-3 mr-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Dark card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>


    </div>
</div>
</div>


@endsection
