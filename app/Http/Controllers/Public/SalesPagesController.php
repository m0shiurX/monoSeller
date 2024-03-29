<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\SalesPage;

class SalesPagesController extends Controller
{
    public function show(SalesPage $salesPage)
    {
        
        // dd($salesPage);
        return view('themes.default.index', compact('salesPage'));
    }
}
