@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.template.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.templates.update", [$template->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.template.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $template->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.template.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="path">{{ trans('cruds.template.fields.path') }}</label>
                <input class="form-control {{ $errors->has('path') ? 'is-invalid' : '' }}" type="text" name="path" id="path" value="{{ old('path', $template->path) }}" required>
                @if($errors->has('path'))
                    <div class="invalid-feedback">
                        {{ $errors->first('path') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.template.fields.path_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="preview_image">{{ trans('cruds.template.fields.preview_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('preview_image') ? 'is-invalid' : '' }}" id="preview_image-dropzone">
                </div>
                @if($errors->has('preview_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('preview_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.template.fields.preview_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="template_fields">{{ trans('cruds.template.fields.template_fields') }}</label>
                <textarea class="form-control {{ $errors->has('template_fields') ? 'is-invalid' : '' }}" name="template_fields" id="template_fields" required>{{ old('template_fields', $template->template_fields) }}</textarea>
                @if($errors->has('template_fields'))
                    <div class="invalid-feedback">
                        {{ $errors->first('template_fields') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.template.fields.template_fields_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.previewImageDropzone = {
    url: '{{ route('admin.templates.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="preview_image"]').remove()
      $('form').append('<input type="hidden" name="preview_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="preview_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($template) && $template->preview_image)
      var file = {!! json_encode($template->preview_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="preview_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection