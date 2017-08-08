<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;

class PhotoController extends Controller
{

    public function index()
    {
        $photos = Photo::all();
        return view('photos.index',compact('photos'));
    }


    public function create()
    {
        return view('photos.create');
    }


    public function store(Request $request)
    {

        $photo = new Photo();
        $photo->name = $request->title;
        $photo->link = $request->image_url;
        $photo->save();
        return redirect()->route('photo.index');
    }


    public function show(Photo $photo)
    {
        //
    }


    public function edit(Photo $photo)
    {
        return view("photos.edit",compact('photo'));
    }


    public function update(Request $request, Photo $photo)
    {
        echo 'updating';
    }


    public function destroy(Photo $photo)
    {
        echo $photo;
    }
}
