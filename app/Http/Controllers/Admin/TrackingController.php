<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTrackingRequest;
use App\Models\Tracking;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class TrackingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tracking_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tracking = Tracking::firstOrCreate(
            ['id' => 1],
            ['header_script' => '', 'footer_script' =>  '']
        );
        return view('admin.trackings.index', compact('tracking'));
    }

    public function edit(Tracking $tracking)
    {
        abort_if(Gate::denies('tracking_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.trackings.edit', compact('tracking'));
    }

    public function update(UpdateTrackingRequest $request, Tracking $tracking)
    {
        $tracking->update($request->all());

        return redirect()->route('admin.trackings.index');
    }
}
