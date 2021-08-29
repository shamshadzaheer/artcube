@extends('layouts.admin')
@section('page-title', 'Photo Gallery')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.photos.create') }}" class="btn btn-primary btn-sm">+ Add New</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th width="120px">Image</th>
                            <th>Caption</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($photos as $photo)
                            <tr>
                                <td><img src="{{ $photo->getUrl() }}" alt="{{ $photo->title }}" class="img-thumbnail"></td>
                                <td><a href="{{ $photo->getEditUrl() }}">{{ $photo->title }}</a></td>
                                <td>
                                    <form action="{{ route('admin.photos.delete', $photo) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger btn-delete">X</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2">
                    {{ $photos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
