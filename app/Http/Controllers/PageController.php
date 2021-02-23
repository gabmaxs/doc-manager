<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;
use App\Models\Category;
use App\Models\Page;
use App\Models\Section;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function editPage(Request $request, Page $page) {
        $page->fill($request->only('name','title'));
        $page->save();
        return response()->json($page);
    }

    public function editPageSequence(Request $request, Category $category) {
        $pages = $request->only('pages')['pages'];
        foreach($pages as $key => $page) {
            $category->pages()->updateExistingPivot($page['id'], [
                'sequence' => $key+1,
            ]);
        }
        return response()->json()->setStatusCode(204);
    }

    public function addPage(Request $request, Version $version, Category $category) {
        $page = Page::create($request->get('page'));
        $page->categories()->attach($category->id, ["sequence" => $request->get('position')]);
        $section = $page->createSection();
        $section->versions()->attach($version->id);
        return response()->json($page);
    }

    public function deletePage(Page $page) {
        $page->delete();
        return response()->json()->setStatusCode(204);
    }
}
