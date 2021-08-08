@extends('layouts.app')
@section('page-title', 'Contact Us - ArtCube')
@section('header-image', '/images/header-contact.jpg')

@section('content')
<div class="container">
<div class="text-center">
    <h1 class="page-title">Contact Us</h1>
</div>
@if (session('success'))
<div class="alert alert-success">
    <h2>Thank you!</h2>
    <p class="mb-0 pb-0">{{ session('success') }}</p>
</div>
@elseif(session('fail'))
<div class="alert alert-danger">
    <p>{{ session('fail') }}</p>
</div>
@endif
<div class="box-container short-box contact-box">
    <form action="{{ route('contact.submit') }}" method="post">
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <input placeholder="Name" type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <input placeholder="Email" type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <input placeholder="Subject" type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required>
                @error('subject')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <textarea name="message" id="message" rows="4" placeholder="Message" class="form-control"></textarea>
                @error('message')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
