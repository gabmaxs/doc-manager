<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;

class PageController extends Controller
{
    function welcome() {
        $currentVersion = Version::last();
        $categories = $currentVersion->categories()->get();
        return view("welcome", [
            "categories" => $categories
        ]);
    }
}
