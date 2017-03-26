<?php

namespace Modules\Base\Http\Controllers\Backend\Search;

use Illuminate\Http\Request;
use Modules\Base\Http\Controllers\Controller;

/**
 * Class SearchController.
 */
class SearchController extends Controller
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        if (! $request->has('q')) {
            return redirect()
                ->route('admin.dashboard')
                ->withFlashDanger(trans('strings.backend.search.empty'));
        }

        /**
         * Process Search Results Here.
         */
        $results = null;

        return view('views::backend.search.index')
            ->withSearchTerm($request->get('q'))
            ->withResults($results);
    }
}
