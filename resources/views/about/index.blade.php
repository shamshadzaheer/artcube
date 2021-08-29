@extends('layouts.app')
@section('page-title', 'About Us - ArtCube')
@section('header-image', '/images/header-about.jpg')

@section('content')
<div class="container mb-5">
    <div class="text-center">
        <h1 class="page-title">About Us</h1>
    </div>
    <div class="site-text">
        <p>{!! \App\Models\Page::find(4)['body']; !!}
        </p>
    </div>
</div>

<div class="about-work-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>1000</h3>
                <p>Hours of Work</p>
            </div>
            <div class="col-md-3">
                <h3>150</h3>
                <p>Projects Completed</p>
            </div>
            <div class="col-md-3">
                <h3>5</h3>
                <p>Locations</p>
            </div>
            <div class="col-md-3">
                <h3>10</h3>
                <p>Awards Won</p>
            </div>
        </div>
    </div>
</div>

@endsection
