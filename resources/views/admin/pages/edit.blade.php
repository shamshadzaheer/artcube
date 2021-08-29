@extends('layouts.admin')
@section('page-title', 'Update Page')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.pages.update', $page) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    @include('admin.pages._form')

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
