@extends('layouts.app')

@section('content')
<div class="container pt-3">
    <div class="text-center">
        <h1 class="page-title">Photo Gallery</h1>
    </div>

    <div id="photo-gallery">
        <div class="gg-container">
            @foreach($photos->chunk(3) as $photo_list)
            <div class="gg-box">
                @foreach($photo_list as $photo)
                <img src="{{ $photo->getUrl(0) }}" alt="{{ $photo->title }}" />
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ url('js/grid-gallery.min.js') }}"></script>
<script>
   window.addEventListener('load', function(){
       gridGallery({
        // gallery selector
        selector: "#photo-gallery",

        // enable dark mode
        darkMode: true,

        // or "horizontal"
        layout: "square",

        // space between images
        gapLength: 5,

        // row height
        rowHeight: 180,

        // column width
        columnWidth: 200

        });

   });
</script>
@endsection
