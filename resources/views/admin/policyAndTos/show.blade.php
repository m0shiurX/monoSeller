@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.policyAndTos.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.policy-and-tos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.policyAndTos.fields.id') }}
                        </th>
                        <td>
                            {{ $policyAndTos->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.policyAndTos.fields.privacy_policy') }}
                        </th>
                        <td>
                            {!! $policyAndTos->privacy_policy !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.policyAndTos.fields.tos') }}
                        </th>
                        <td>
                            {!! $policyAndTos->tos !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.policy-and-tos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
