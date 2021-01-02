<?php 
    use App\Tags;
    $tag = Tags::all();
?>

<div class="col-md-4 mb-5">
    <div class="card  mb-5 light-blue lighten-1">
        <div class="card-body shadow">
            <h4 class="text-center font-weight-bold cyan-lighter-hover mb-3">About Us</h4>
            <p class="white-darker-hover text-left">{{ config('app.name', 'CryptoICE') }} is a discussion group about cryptocurrency, airdrops, defi, and others.</p>
        </div>
    </div>
    <p class="font-weight-bold cyan-lighter-hover mb-3">Category :</p>
    <ul class="list-group mb-5 shadow">
        
        @foreach($category_widget as $hasil)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ route('blog.category', $hasil->slug) }}" class="trigger teal info-color text-white">{{ $hasil->name }}</a>
            <span class="badge badge-primary badge-pill">{{ $hasil->posts->count() }}</span>

        </li>
        @endforeach
        
    </ul>
    <p class="font-weight-bold cyan-lighter-hover mb-3 ">Tags :</p>
    <ul class="list-group mb-5 shadow">
        <li class="list-group-item justify-content-between align-items-center">
            @foreach($tag as $tags)
            <a href="#!" class="trigger teal info-color text-white">{{$tags->name}}</a>
            @endforeach
        </li>
    </ul>
    <div class="card card-body mb-3 blue-grey lighten-4 shadow">
        <p class="mb-0 mt-0 blue-grey-text">Advertise Here</p>
    </div>
</div>
