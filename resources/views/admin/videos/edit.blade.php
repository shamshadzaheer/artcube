@extends('layouts.admin')
@section('page-title', 'Update Video')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.videos.update', $video) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    @include('admin.videos._form')

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
