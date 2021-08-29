@extends('layouts.app')
@section('page-title', 'Services - ArtCube')
@section('header-image', '/images/header-services.jpg')

@section('content')
<div class="container">
<div class="text-center">
    <h1 class="page-title">Our Services</h1>
</div>

<div class="site-text">
    <p>{!!  \App\Models\Page::find(5)['body']; !!}</p>
</div>

<div class="box-container no-border-radius mt-5">
    <div class="row">
        <div class="col-md-4">
            <h2 class="text-bold">Branding</h2>
            {!! \App\Models\Page::find(6)['body'] !!}
        </div>
        <div class="col-md-4">
            <h2 class="text-bold">Film</h2>
            {!! \App\Models\Page::find(7)['body'] !!}
        </div>
        <div class="col-md-4">
            <h2 class="text-bold">Events</h2>
            {!!  \App\Models\Page::find(8)['body'] !!}
        </div>
    </div>
</div>

</div>
@endsection
