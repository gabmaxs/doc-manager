<?php

namespace App\Http\Controllers;

use App\Models\Section;
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
}
