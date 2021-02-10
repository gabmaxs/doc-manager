<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;
use App\Models\Page;

class PageController extends Controller
{
    function welcome() {
        $currentVersion = Version::last();
        $categories = $currentVersion->categories()->get();
        return view("welcome", [
            "categories" => $categories,
            "versionId" => $currentVersion->id
        ]);
    }

    function docs(Request $request, Version $version, Page $page) {
        $versions = Version::where('is_active', 1)->get();
        $categories = $version->categories()->get();

        if(!$page->id) $page = Page::default();
        $sections = $page->sections()->get();
        
        return view("docs", [
            "versions" => $versions,
            "categories" => $categories,
            "sections" => $sections,
            "page" => $page,
            "currentVersion" => $version
        ]);
    }
}
