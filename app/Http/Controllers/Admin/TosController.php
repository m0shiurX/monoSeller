<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyToRequest;
use App\Http\Requests\StoreToRequest;
use App\Http\Requests\UpdateToRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('to_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tos.index');
    }

    public function create()
    {
        abort_if(Gate::denies('to_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tos.create');
    }

    public function store(StoreToRequest $request)
    {
        $to = To::create($request->all());

        return redirect()->route('admin.tos.index');
    }

    public function edit(To $to)
    {
        abort_if(Gate::denies('to_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tos.edit', compact('to'));
    }

    public function update(UpdateToRequest $request, To $to)
    {
        $to->update($request->all());

        return redirect()->route('admin.tos.index');
    }

    public function show(To $to)
    {
        abort_if(Gate::denies('to_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tos.show', compact('to'));
    }

    public function destroy(To $to)
    {
        abort_if(Gate::denies('to_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $to->delete();

        return back();
    }

    public function massDestroy(MassDestroyToRequest $request)
    {
        $tos = To::find(request('ids'));

        foreach ($tos as $to) {
            $to->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
