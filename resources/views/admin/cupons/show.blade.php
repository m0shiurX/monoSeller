@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.cupon.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cupons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.cupon.fields.id') }}
                        </th>
                        <td>
                            {{ $cupon->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cupon.fields.code') }}
                        </th>
                        <td>
                            {{ $cupon->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cupon.fields.description') }}
                        </th>
                        <td>
                            {{ $cupon->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cupon.fields.valid_till') }}
                        </th>
                        <td>
                            {{ $cupon->valid_till }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.cupon.fields.valid_from') }}
                        </th>
                        <td>
                            {{ $cupon->valid_from }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cupons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection