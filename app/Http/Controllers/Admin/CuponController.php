<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCuponRequest;
use App\Http\Requests\StoreCuponRequest;
use App\Http\Requests\UpdateCuponRequest;
use App\Models\Cupon;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CuponController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cupon_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cupons = Cupon::all();

        return view('admin.cupons.index', compact('cupons'));
    }

    public function create()
    {
        abort_if(Gate::denies('cupon_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cupons.create');
    }

    public function store(StoreCuponRequest $request)
    {
        $cupon = Cupon::create($request->all());

        return redirect()->route('admin.cupons.index');
    }

    public function edit(Cupon $cupon)
    {
        abort_if(Gate::denies('cupon_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cupons.edit', compact('cupon'));
    }

    public function update(UpdateCuponRequest $request, Cupon $cupon)
    {
        $cupon->update($request->all());

        return redirect()->route('admin.cupons.index');
    }

    public function show(Cupon $cupon)
    {
        abort_if(Gate::denies('cupon_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cupons.show', compact('cupon'));
    }

    public function destroy(Cupon $cupon)
    {
        abort_if(Gate::denies('cupon_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cupon->delete();

        return back();
    }

    public function massDestroy(MassDestroyCuponRequest $request)
    {
        $cupons = Cupon::find(request('ids'));

        foreach ($cupons as $cupon) {
            $cupon->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
