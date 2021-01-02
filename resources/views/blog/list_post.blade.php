@extends('template_blog.content')
@section('isi')
    <div class="row row-cols-1 row-cols-md-2">
        @foreach($data as $list_post)
            <div class="col mb-4">
                <!-- Card -->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ asset($list_post->gambar)}}" alt="{{ $list_post->judul }}" />
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
    
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">{{ $list_post->judul }}</h4>
                        <!--Text-->
                        <p class="card-text">...</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a href="{{ route('blog.isi', $list_post->slug ) }}" class="btn btn-light-blue btn-md">Read more</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
        @endforeach
    </div>
    <center>{{ $data->links() }}</center>
@endsection