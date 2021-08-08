@extends('layouts.app')

@section('content')
<div class="container">
    <div class="home-video-box">
        <div class="ro">
            <div class="col">
                <p>Afghanistan is a place of untold stories. Karukh, Herat</p>
                <video width="320" height="240" controls>
                    <source src="movie.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>
@endsection
