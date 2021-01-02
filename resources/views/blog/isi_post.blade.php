@extends('template_blog.content')

@section('isi')

	@foreach($data as $isi_post)

	<div class="card card-cascade">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{asset($isi_post->gambar) }}" alt="Card image cap" />
                        <a href="#!">
                            <div class="mask rgba-black-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade">
                        <div class="text-center">
                            <h4 class="card-title font-weight-bold">{{ $isi_post->judul }}</h4>
                            <ul class="list-unstyled list-inline font-small">
                              <li class="list-inline-item pr-2 black-text"><i class="far fa-clock pr-1"></i>{{ $isi_post->created_at }}</li>
                              <li class="list-inline-item pr-2 black-text"><i class="fas fa-user-edit fas-sm pr-1"></i>{{ $isi_post->users->name }}</li>
                             </ul>
                        </div>
                        <div class="">
                            <p class="mb-0 mt-0">Category : <a href="#!" class="trigger teal info-color text-white">{{ $isi_post->category->name }}</a></p>
                        </div>
                        <div class="content mt-5">
                            {!! $isi_post->content !!}
                        </div>
                        <hr>
                        <div class="text-center">
                            <h5>Share On</h5>
                            <!--Twitter-->
                            <a href="https://twitter.com/intent/tweet?text=https://cryptoice.biz/posts" class="btn btn-sm btn-tw"><i class="fab fa-twitter pr-1"></i> Twitter</a>
                        </div>
                    </div>
                </div>
	@endforeach

@endsection