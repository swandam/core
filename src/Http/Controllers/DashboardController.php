<?php

namespace Swandam\Core\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('swandam::panel.dashboard.index');
    }
}
