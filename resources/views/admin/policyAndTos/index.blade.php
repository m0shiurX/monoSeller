@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header row mx-4 border-0 px-0 pb-0 justify-content-between align-items-center">
        <h4 class="mb-0">{{ trans('cruds.policyAndTos.title_singular') }}</h4>
        @can('policy_and_tos_create')
            <div class="">
                <div class="">
                    <a class="btn btn-success" href="{{ route('admin.policy-and-tos.edit', $policyAndTos->id) }}">
                        {{ trans('global.edit') }} {{ trans('cruds.policyAndTos.title_singular') }}
                    </a>
                </div>
            </div>
        @endcan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PolicyAndTo">
                <thead>
                    <tr>
                        <th>
                            Privacy Policy
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{!! $policyAndTos->privacy_policy !!}</td>
                    </tr>

                </tbody>
            </table>
            <table class=" table table-bordered table-striped table-hover datatable datatable-PolicyAndTo">
                <thead>
                    <tr>
                        <th>
                            Terms of Services
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{!! $policyAndTos->tos !!}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
