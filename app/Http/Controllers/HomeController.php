<?php

namespace App\Http\Controllers;

use App\Models\Version;
use App\Models\Category;
use App\Models\Page;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->only("edit");
    }

    function redirect(Version $version) {
        if(!$version->id)   $version = Version::last();

        $category = Category::default();
        return redirect()->route('docs',[
            'version' => $version,
            'page' => $category->first_page
        ]);
    }

    function welcome() {
        $currentVersion = Version::last();
        $categories = $currentVersion->categories()->get();
        $versions = Version::where('is_active', 1)->get();
        return view("welcome", [
            "versions" => $versions,
            "categories" => $categories,
            "currentVersion" => $currentVersion,
            "versions" => $versions
        ]);
    }

    function docs(Version $version, Page $page) {
        $versions = Version::where('is_active', 1)->get();
        $categories = $version->categories()->get();
                
        return view("docs", [
            "versions" => $versions,
            "categories" => $categories,
            "page" => $page,
            "currentVersion" => $version
        ]);
    }

    function edit(Version $version, Page $page) {
        $versions = Version::where('is_active', 1)->get();
        $categories = $version->categories()->get();
                
        return view("edit", [
            "versions" => $versions,
            "categories" => $categories,
            "page" => $page,
            "currentVersion" => $version
        ]);
    }
}
