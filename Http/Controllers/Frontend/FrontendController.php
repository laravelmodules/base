<?php

namespace Modules\Base\Http\Controllers\Frontend;

use Modules\Base\Http\Controllers\Controller;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('views::frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('views::frontend.macros');
    }
}
