<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index()
    {
        return view('editor'); 
    }

    public function saveDocument(Request $request)
    {
        $content = $request->input('content');
        
        
        return response()->json(['message' => 'Document saved successfully']);
    }
}
