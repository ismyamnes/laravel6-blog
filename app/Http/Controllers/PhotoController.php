<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        return view('photos.index');
    }

    public function show($id)
    {
        return view('photos.show', ['id' => $id]);
    }
}
