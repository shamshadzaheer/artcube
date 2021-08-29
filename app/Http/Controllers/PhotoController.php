<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    const PHOTOS_LIMIT = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::latest()->get();

        return view('photos.index', compact('photos'));
    }

    /**
     * Admin
     */
    public function admin()
    {
        $photos = Photo::latest('id')->simplePaginate(SELF::PHOTOS_LIMIT);

        return view('admin.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photo = new Photo();

        return view('admin.photos.create', compact('photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        $photo = Photo::create([
            'title' => $request->title,
        ]);

        $photo->uploadPhotoFile();

        return redirect()->route('admin.photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $request->validate([
            'title' => 'required|min:3|max:255',
            'file' => 'nullable|mimes:jpg,png,jpeg',
        ]);

        $photo->uploadPhotoFile();

        $photo->update([
            'title' => $request->title,
        ]);

        return redirect()->route('admin.photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->deletePhotoFile();

        $photo->delete();

        return redirect()->route('admin.photos');
    }
}
