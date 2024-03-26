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
        Update Template Content
    </div>
    <div class="card-body">
        <form id="template_content" action="">
            <input type="hidden" name="sales_page_id" value="{{$salesPage->id}}">
            <div id="required-fields-section">
            </div>
            <button class="btn btn-success" id="template_content_button">
                Save Content
            </button>
        </form>
    </div>
</div>
</div>
@endsection

@section('scripts')
{{-- @parent --}}
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#template_id').change(function() {
    var templateId = $(this).val();

    $.ajax({
        type: 'POST',
        url: '{{ route("admin.load_template_fields") }}',
        data: {
            template_id: templateId
        },
        success: function(response) {
            $('#required-fields-section').html(response.form_fields);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});
$('#template_content_button').click(function(e) {
    e.preventDefault();
    updateTemplateContent();
});

// Function to update template content
function updateTemplateContent() {
    // Serialize the entire form data including template ID
    var formData = $('#template_content').serializeArray();
    var templateId = $('#template_id').val();
    formData.push({name: 'template_id', value: templateId}); // Add template ID to form data
    console.log(formData);

    var jsonData = JSON.stringify(formData);
    console.log(jsonData);
    
    // Send AJAX request to update template_content
    $.ajax({
        type: 'POST',
        url: '{{ route("admin.update_template_content") }}',
        data: formData, // Send entire form data including template ID
        success: function(response) {
            console.log('Template content updated successfully');
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

</script>
@endsection
