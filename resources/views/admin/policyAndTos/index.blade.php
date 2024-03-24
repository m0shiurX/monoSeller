@extends('layouts.admin')
@section('content')
@can('policy_and_to_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.policy-and-tos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.policyAndTo.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.policyAndTo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PolicyAndTo">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.policyAndTo.fields.id') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($policyAndTos as $key => $policyAndTo)
                        <tr data-entry-id="{{ $policyAndTo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $policyAndTo->id ?? '' }}
                            </td>
                            <td>
                                @can('policy_and_to_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.policy-and-tos.show', $policyAndTo->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('policy_and_to_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.policy-and-tos.edit', $policyAndTo->id) }}">
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
  let table = $('.datatable-PolicyAndTo:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection