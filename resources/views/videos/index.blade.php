@extends('layouts.app')
@section('page-title', 'Video Gallery - ArtCube')
@section('header-image', '/images/header-videos.jpg')

@section('content')
<div class="container">
<div class="text-center">
    <h1 class="page-title">Video Gallery</h1>
</div>
<div class="video-gallery">
    @foreach ($videos->chunk(3) as $video_list)
        <div class="row">
            @foreach ($video_list as $video)
                <div class="col-md-4">
                    <a href="{{ $video->getVideoLink() }}" target="_blank">
                        <img src="{{ $video->getThumbnailpath() }}" alt="{{ $video->title }}">
                    </a>
                    <p>{{ $video->title }}</p>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

</div>
@endsection
