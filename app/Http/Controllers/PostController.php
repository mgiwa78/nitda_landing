<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\File;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    public function index()
    {

        $posts = Post::orderBy("id", "desc")->paginate(5);

        return view("posts", compact("posts"));
    }


    // Create Post 
    public function create()
    {

        return view("create");
    }


    public function store(Request $request)
    {

        $post = [
            "title" => $request->title,
            "body" => $request->body
        ];

        $post = Post::create($post);

        return back()->with("success", "Post has been created");

    }

    public function uploadImage(Request $request)
    {
        $uploadedImage = $request->file('upload');

        $imagePath = $uploadedImage->store('images', 'public');

        return response()->json(['url' => asset('storage/' . $imagePath)]);
    }

    public function upload(Request $request)
    {
        $uploadedFile = $request->file('file');

        // Save the file to a storage location
        $filePath = $uploadedFile->store('uploads', 'public');

        // Create a record in the database for the uploaded file
        File::create([
            'filename' => $uploadedFile->getClientOriginalName(),
            'path' => $filePath,
        ]);

        // Redirect back or return a response
        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}