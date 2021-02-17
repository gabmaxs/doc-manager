<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Page;
use App\Models\Version;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    
    public function editSection(Request $request, Section $section) {
        $section->fill($request->only('content', 'name'));
        $section->save();
        return response()->json($section);
    }

    public function editPage(Request $request, Page $page) {
        $page->fill($request->only('name'));
        $page->save();
        return response()->json($page);
    }

    public function editSectionsSequence(Request $request, Page $page) {
        $sections = $request->only('sections')['sections'];
        foreach($sections as $key => $section) {
            $page->sections()->updateExistingPivot($section['id'], [
                'sequence' => $key+1,
            ]);
        }
        return response()->json()->setStatusCode(204);
    }

    public function addSection(Request $request, Version $version, Page $page) {
        $section = Section::create($request->get('section'));
        $section->versions()->attach($version->id);
        $section->pages()->attach($page->id, ["sequence" => $request->get('position')]);
        return response()->json($section);
    }

    public function deleteSection(Section $section) {
        $section->versions()->detach();
        $section->pages()->detach();
        $section->delete();
        return response()->json()->setStatusCode(204);
    }
}
