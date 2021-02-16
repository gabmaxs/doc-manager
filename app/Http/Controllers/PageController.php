<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;
use App\Models\Category;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->only("edit");
    }

    function redirect(Request $request, Version $version) {
        $category = Category::default();
        return redirect()->route('docs',[
            'version' => $version,
            'category' => $category
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

    function docs(Request $request, Version $version, Category $category) {
        $versions = Version::where('is_active', 1)->get();
        $categories = $version->categories()->get();
                
        return view("docs", [
            "versions" => $versions,
            "categories" => $categories,
            "selectedCategory" => $category,
            "currentVersion" => $version
        ]);
    }

    function edit(Request $request, Version $version, Category $category) {
        $versions = Version::where('is_active', 1)->get();
        $categories = $version->categories()->get();
                
        return view("edit", [
            "versions" => $versions,
            "categories" => $categories,
            "selectedCategory" => $category,
            "currentVersion" => $version
        ]);
    }

}
