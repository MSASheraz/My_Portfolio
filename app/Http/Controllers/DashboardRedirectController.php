<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardRedirectController extends Controller
{
    public function __invoke(Request $request)
    {
        // Keep compatibility with auth scaffold/tests expecting a named route `dashboard`.
        return redirect()->route('admin.dashboard');
    }
}

