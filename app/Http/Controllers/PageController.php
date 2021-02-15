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

    function welcome() {
        $currentVersion = Version::last();
        $categories = $currentVersion->categories()->get();
        $versions = Version::where('is_active', 1)->get();
        return view("welcome", [
            "categories" => $categories,
            "currentVersion" => $currentVersion,
            "versions" => $versions
        ]);
    }

    function docs(Request $request, Version $version, Category $category) {
        $versions = Version::where('is_active', 1)->get();
        $categories = $version->categories()->get();
        
        if(!$category->id) $category = Category::default();
        
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
        
        if(!$category->id) $category = Category::default();
        
        return view("edit", [
            "versions" => $versions,
            "categories" => $categories,
            "selectedCategory" => $category,
            "currentVersion" => $version
        ]);
    }

}
