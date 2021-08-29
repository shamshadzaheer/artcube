<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    const VIDEOS_LIMIT = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::latest()->get();

        return view('videos.index', compact('videos'));
    }

    /**
     * Admin
     */
    public function admin()
    {
        $videos = Video::latest('id')->simplePaginate(SELF::VIDEOS_LIMIT);

        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video = new Video();

        return view('admin.videos.create', compact('video'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videoData = $request->validate([
            'title' => 'required',
            'youtube_code' => 'required',
        ]);

        Video::create($videoData);

        return redirect()->route('admin.videos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $videoData = $request->validate([
            'title' => 'required',
            'youtube_code' => 'required',
        ]);

        $video->update($videoData);

        return redirect()->route('admin.videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('admin.videos');
    }
}
