@extends('layouts.admin')
@section('content')
@can('tracking_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.trackings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.tracking.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.tracking.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Tracking">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.tracking.fields.id') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trackings as $key => $tracking)
                        <tr data-entry-id="{{ $tracking->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $tracking->id ?? '' }}
                            </td>
                            <td>
                                @can('tracking_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.trackings.show', $tracking->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('tracking_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.trackings.edit', $tracking->id) }}">
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
  let table = $('.datatable-Tracking:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection