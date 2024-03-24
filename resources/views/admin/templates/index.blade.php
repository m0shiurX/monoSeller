@extends('layouts.admin')
@section('content')
@can('template_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.templates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.template.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.template.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Template">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.template.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.template.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.template.fields.path') }}
                        </th>
                        <th>
                            {{ trans('cruds.template.fields.preview_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.template.fields.template_fields') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($templates as $key => $template)
                        <tr data-entry-id="{{ $template->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $template->id ?? '' }}
                            </td>
                            <td>
                                {{ $template->name ?? '' }}
                            </td>
                            <td>
                                {{ $template->path ?? '' }}
                            </td>
                            <td>
                                @if($template->preview_image)
                                    <a href="{{ $template->preview_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $template->preview_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $template->template_fields ?? '' }}
                            </td>
                            <td>

                                @can('template_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.templates.edit', $template->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan


                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Template:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection