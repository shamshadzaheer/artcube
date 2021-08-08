@extends('layouts.app')
@section('page-title', 'Services - ArtCube')
@section('header-image', '/images/header-services.jpg')

@section('content')
<div class="container">
<div class="text-center">
    <h1 class="page-title">Our Services</h1>
</div>

<div class="site-text">
    <p>ArtCube is a team of passionate experts who purely enjoy working on the domain of video production and branding. We are the leading company in the field of Film Production, Branding Events and have served hundreds of customers from the last couple of years. Quality work is not only our success but our core principle, which makes us work beyond the boundaries and extend our capabilities to work hard.</p>
</div>

<div class="box-container no-border-radius mt-5">
    <div class="row">
        <div class="col-md-4">
            <h2 class="text-bold">Branding</h2>
            <ul>
                <li>Advertisement</li>
                <li>Event Promotion</li>
                <li>Advertising & Campaigns</li>
                <li>Brand Identity Development</li>
                <li>Strategy and Planning</li>
                <li>Architecture Design</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2 class="text-bold">Film</h2>
            <ul>
                <li>Feature Film</li>
                <li>Documentary Films</li>
                <li>Short Films</li>
                <li>Animation</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2 class="text-bold">Events</h2>
            <ul>
                <li>AC Talks</li>
                <li>Photography Exhibtions</li>
            </ul>
        </div>
    </div>
</div>

</div>
@endsection
