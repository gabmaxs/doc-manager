<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;
use App\Models\Category;

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
}
