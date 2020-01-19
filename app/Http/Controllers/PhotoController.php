<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Comment;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();

        return view('photos.index', ['photos' => $photos]);
    }

    public function show($id)
    {
        $photo = Photo::findOrFail($id);

        return view('photos.show', ['photo' => $photo]);
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);
        
        $request->merge([
            'photo_id' => $id,
        ]);

        Comment::create($request->all());

        return redirect()->back()->with('status', 'Komentar Berhasil DItambahkan.');
        }
}
