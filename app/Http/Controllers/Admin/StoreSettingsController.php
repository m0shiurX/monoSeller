<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStoreSettingRequest;
use App\Http\Requests\StoreStoreSettingRequest;
use App\Http\Requests\UpdateStoreSettingRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StoreSettingsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('store_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.storeSettings.index');
    }

    public function create()
    {
        abort_if(Gate::denies('store_setting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.storeSettings.create');
    }

    public function store(StoreStoreSettingRequest $request)
    {
        $storeSetting = StoreSetting::create($request->all());

        return redirect()->route('admin.store-settings.index');
    }

    public function edit(StoreSetting $storeSetting)
    {
        abort_if(Gate::denies('store_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.storeSettings.edit', compact('storeSetting'));
    }

    public function update(UpdateStoreSettingRequest $request, StoreSetting $storeSetting)
    {
        $storeSetting->update($request->all());

        return redirect()->route('admin.store-settings.index');
    }

    public function show(StoreSetting $storeSetting)
    {
        abort_if(Gate::denies('store_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.storeSettings.show', compact('storeSetting'));
    }

    public function destroy(StoreSetting $storeSetting)
    {
        abort_if(Gate::denies('store_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $storeSetting->delete();

        return back();
    }

    public function massDestroy(MassDestroyStoreSettingRequest $request)
    {
        $storeSettings = StoreSetting::find(request('ids'));

        foreach ($storeSettings as $storeSetting) {
            $storeSetting->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
