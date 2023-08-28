<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;

class DocumentController extends Controller
{

    /**
     * Display a listing of the resource.
     **/

    public function index()
    {
        $documents = Document::all(); // Retrieve documents from the database
        return view('document.all', ['documents' => $documents]);
    }

    public function all()
    {

    }
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . "_" . time() . "_" . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/' . $fileName);

            return response()->json([
                'fileName' => $fileName,
                'uploaded' => 1,
                'url' => $url
            ]);
        }
    }

    public function store(Request $request)
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $content = $request->input('content'); // Replace with the actual input name
        $title = $request->input('title'); // Replace with the actual input name
        $document = Document::create(['content' => $content, 'title' => $title,]);
        return redirect()->route('document.all')->with('success', 'Document saved successfully.');

    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $documents = Document::all(); // Retrieve documents from the database
        return view('document.all', ['documents' => $documents]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}