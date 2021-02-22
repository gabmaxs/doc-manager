<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function editCategory(Request $request, Category $category) {
        $category->fill($request->only('name','title'));
        $category->save();
        return response()->json($category);
    }

    public function getPages(Category $category) {
        $pages = $category->pages;
        return response()->json($pages);
    }
}
