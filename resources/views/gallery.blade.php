@extends('frontend.layouts.header')

@section('title')
    <title>Amethitech | amethitech Gallery</title>
@endsection

@section('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="gallery of amethitech these gallery image are created with the help of artificial intelligence,
    gallery of future">
@endsection

<style>
    .image-gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .image {
        width: calc(25% - 20px); /* For larger screens, show 4 images in a row */
        margin: 10px;
    }

    .image img {
        max-width: 100%;
        height: auto;
    }

    /* Media query for smaller screens (e.g., mobile phones) */
    @media (max-width: 767px) {
        .image {
            width: 100%; /* Show one image per row on smaller screens */
        }
    }

    /* Styling for pagination */
    #pagination {
        text-align: right;
        margin-top: 20px; /* Adjust spacing as needed */
    }

    .pagination {
        display: inline-block;
        margin-bottom: 0; /* Remove default margin */
    }

    .pagination li {
        display: inline;
        margin-right: 10px; /* Adjust spacing between pagination items */
    }
   .hidden {
       display: none;
   }
</style>

@section('index-script')
    <script src="https://kit.fontawesome.com/26ae5e4e2d.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <section data-bs-version="5.1" class="features6 cid-tlVYUtaSS3" id="features06-b" style='background-color:#c6ffe0 !important'>
        <div class="container" >
            <div class="image-gallery"  >
                @foreach ($gallery as $image)
                    <div class="image" >
                        <img src="{{ asset('uploads/' . $image->image) }}" alt="{{ $image->title }}">
                        <p>{{ $image->title }}</p>
                    </div>
                @endforeach
            </div>
            <div id="pagination" >
                {{ $gallery->links() }}
            </div>
        </div>
    </section>

@endsection
