@extends('layouts.admin')
@section('page-title', 'Pages')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.pages.create') }}" class="btn btn-primary btn-sm">+ Add New</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                            <tr>
                                <td>
                                    <a href="{{ $page->getEditUrl() }}">
                                        <h4>
                                            {{ $page->title }}
                                        </h4>
                                    </a>
                                    @if (request()->has('development_mode'))
                                    <span class="d-block">
                                        <code>
                                            $block = \App\Models\Page::find({{ $page->id }});
                                        </code>
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.pages.delete', $page) }}" method="post">
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
                    {{ $pages->links() }}
                </div>
                <a href="?development_mode">Development Mode</a>
            </div>
        </div>
    </div>
</div>
@endsection
