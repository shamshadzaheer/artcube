@extends('layouts.admin')
@section('page-title', 'Videos')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.videos.create') }}" class="btn btn-primary btn-sm">+ Add New</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th width="120px">Image</th>
                            <th>Caption</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <td><img src="{{ $video->getThumbnailPath() }}" alt="{{ $video->title }}" class="img-thumbnail"></td>
                                <td><a href="{{ $video->getEditUrl() }}">{{ $video->title }}</a></td>
                                <td>
                                    <form action="{{ route('admin.videos.delete', $video) }}" method="post">
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
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
