<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrackingRequest;
use App\Http\Requests\UpdateTrackingRequest;
use App\Models\Tracking;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tracking_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trackings = Tracking::all();

        return view('admin.trackings.index', compact('trackings'));
    }

    public function create()
    {
        abort_if(Gate::denies('tracking_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.trackings.create');
    }

    public function store(StoreTrackingRequest $request)
    {
        $tracking = Tracking::create($request->all());

        return redirect()->route('admin.trackings.index');
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

    public function show(Tracking $tracking)
    {
        abort_if(Gate::denies('tracking_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.trackings.show', compact('tracking'));
    }
}
