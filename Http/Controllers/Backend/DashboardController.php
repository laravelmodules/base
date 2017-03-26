<?php

namespace Modules\Base\Http\Controllers\Backend;

use Modules\Base\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('views::backend.dashboard');
    }
}
