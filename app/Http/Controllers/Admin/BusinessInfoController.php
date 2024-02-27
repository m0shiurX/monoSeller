<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBusinessInfoRequest;
use App\Http\Requests\StoreBusinessInfoRequest;
use App\Http\Requests\UpdateBusinessInfoRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BusinessInfoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('business_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.businessInfos.index');
    }

    public function create()
    {
        abort_if(Gate::denies('business_info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.businessInfos.create');
    }

    public function store(StoreBusinessInfoRequest $request)
    {
        $businessInfo = BusinessInfo::create($request->all());

        return redirect()->route('admin.business-infos.index');
    }

    public function edit(BusinessInfo $businessInfo)
    {
        abort_if(Gate::denies('business_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.businessInfos.edit', compact('businessInfo'));
    }

    public function update(UpdateBusinessInfoRequest $request, BusinessInfo $businessInfo)
    {
        $businessInfo->update($request->all());

        return redirect()->route('admin.business-infos.index');
    }

    public function show(BusinessInfo $businessInfo)
    {
        abort_if(Gate::denies('business_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.businessInfos.show', compact('businessInfo'));
    }

    public function destroy(BusinessInfo $businessInfo)
    {
        abort_if(Gate::denies('business_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $businessInfo->delete();

        return back();
    }

    public function massDestroy(MassDestroyBusinessInfoRequest $request)
    {
        $businessInfos = BusinessInfo::find(request('ids'));

        foreach ($businessInfos as $businessInfo) {
            $businessInfo->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
