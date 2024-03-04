<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function uri()
    {
        $pageBuilder = app()->make('phpPageBuilder');
        $pageBuilder->handlePublicRequest();
    }
}
