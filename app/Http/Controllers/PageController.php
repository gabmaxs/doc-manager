<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;
use App\Models\Category;
use App\Models\Page;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function editPage(Request $request, Page $page) {
        $page->fill($request->only('name'));
        $page->save();
        return response()->json($page);
    }

}
