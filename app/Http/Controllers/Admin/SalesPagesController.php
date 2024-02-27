<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySalesPageRequest;
use App\Http\Requests\StoreSalesPageRequest;
use App\Http\Requests\UpdateSalesPageRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SalesPagesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sales_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.salesPages.index');
    }

    public function create()
    {
        abort_if(Gate::denies('sales_page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.salesPages.create');
    }

    public function store(StoreSalesPageRequest $request)
    {
        $salesPage = SalesPage::create($request->all());

        return redirect()->route('admin.sales-pages.index');
    }

    public function edit(SalesPage $salesPage)
    {
        abort_if(Gate::denies('sales_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.salesPages.edit', compact('salesPage'));
    }

    public function update(UpdateSalesPageRequest $request, SalesPage $salesPage)
    {
        $salesPage->update($request->all());

        return redirect()->route('admin.sales-pages.index');
    }

    public function show(SalesPage $salesPage)
    {
        abort_if(Gate::denies('sales_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.salesPages.show', compact('salesPage'));
    }

    public function destroy(SalesPage $salesPage)
    {
        abort_if(Gate::denies('sales_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $salesPage->delete();

        return back();
    }

    public function massDestroy(MassDestroySalesPageRequest $request)
    {
        $salesPages = SalesPage::find(request('ids'));

        foreach ($salesPages as $salesPage) {
            $salesPage->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
