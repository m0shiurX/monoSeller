@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header row mx-4 border-0 px-0 pb-0 justify-content-between align-items-center">
        <h4 class="mb-0">{{ trans('cruds.tracking.title_singular') }} Scripts </h4>
        @can('tracking_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.trackings.edit', $tracking->id) }}">
                        {{ trans('global.edit') }} {{ trans('cruds.tracking.title_singular') }}
                    </a>
                </div>
            </div>
        @endcan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Tracking">
                <thead>
                    <tr>

                        <th>
                            {{ trans('cruds.tracking.fields.header_script') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>
                            <code>
                            {{$tracking->header_script ?? '' }}
                            </code>
                            </td>
                        </tr>
                </tbody>
            </table>
            <table class=" table table-bordered table-striped table-hover datatable datatable-Tracking">
                <thead>
                    <tr>

                        <th>
                            {{ trans('cruds.tracking.fields.footer_script') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>
                            <code>
                                {{ html_entity_decode($tracking->footer_script ?? '') }}
                            </code>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
