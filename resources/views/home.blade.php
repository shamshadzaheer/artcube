@extends('layouts.app')


@section('content')
<div class="container">
    <div class="home-video-box">
        <div class="row">
            <div class="col">
                <p>Afghanistan is a place of untold stories. Karukh, Herat</p>
                <video width="100%" class="animate__animated animate__fadeIn" autoplay controls>
                    <source src="{{ url('video-files/main-video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <hr>

    <div class="home-latest-videos">
        <h2>Latest Videos:</h2>
        <div class="row">
            @foreach ($videos as $video)
                <div class="col-md-6">
                    <a href="{{ $video->getVideoLink() }}">
                        <img src="{{ $video->getThumbnailPath() }}" alt="{{ $video->title }}">
                    </a>
                    <p>{{ $video->title }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="home-latest-photos">
        <h2>Latest Photos:</h2>
        <div class="row">
            @foreach ($photos as $photo)
                <div class="col-md-6">
                    <a href="{{ $photo->getUrl() }}" target="_blank">
                        <img src="{{ $photo->getUrl() }}" alt="{{ $photo->title }}">
                    </a>
                    <p>{{ $photo->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
