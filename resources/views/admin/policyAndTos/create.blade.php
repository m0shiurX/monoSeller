@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.policyAndTos.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.policy-and-tos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="privacy_policy">{{ trans('cruds.policyAndTos.fields.privacy_policy') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('privacy_policy') ? 'is-invalid' : '' }}" name="privacy_policy" id="privacy_policy">{!! old('privacy_policy') !!}</textarea>
                @if($errors->has('privacy_policy'))
                    <div class="invalid-feedback">
                        {{ $errors->first('privacy_policy') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.policyAndTos.fields.privacy_policy_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tos">{{ trans('cruds.policyAndTos.fields.tos') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('tos') ? 'is-invalid' : '' }}" name="tos" id="tos">{!! old('tos') !!}</textarea>
                @if($errors->has('tos'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tos') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.policyAndTos.fields.tos_helper') }}</span>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.policy-and-tos.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $policyAndTos->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection
