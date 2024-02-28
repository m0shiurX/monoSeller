@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.salesPage.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sales-pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.salesPage.fields.id') }}
                        </th>
                        <td>
                            {{ $salesPage->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.salesPage.fields.title') }}
                        </th>
                        <td>
                            {{ $salesPage->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.salesPage.fields.slug') }}
                        </th>
                        <td>
                            {{ $salesPage->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.salesPage.fields.product') }}
                        </th>
                        <td>
                            {{ $salesPage->product->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.salesPage.fields.header_script') }}
                        </th>
                        <td>
                            {{ $salesPage->header_script }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.salesPage.fields.footer_script') }}
                        </th>
                        <td>
                            {{ $salesPage->footer_script }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sales-pages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection