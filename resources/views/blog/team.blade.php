@extends('template_blog.content')
@section('isi')
<!-- Section: Team v.2 -->
<section class="team-section text-center my-5">
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>
    <!-- Section description -->
    <p class="grey-text w-responsive mx-auto mb-5">CryptoICE is a discussion group about cryptocurrency, airdrops, defi, and others.</p>
    
    <!-- Grid row -->
    <div class="row row-cols-1 row-cols-md-2 text-center">
        @foreach( $team as $tim)
        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-5">
            <div class="avatar ">
                <img src="{{asset('public/uploads/team/250x250/'.$tim->gambar)}}" class="rounded z-depth-1-half" alt="{{$tim->name}}">
            </div>
            <h4 class="font-weight-bold dark-grey-text my-2">{{$tim->name}}</h4>
            <h6 class="text-uppercase grey-text mb-3"><strong>{{$tim->tipe}}</strong></h6>
            <!-- Twitter -->
            <a href="{{$tim->twitter}}" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
                <i class="fab fa-twitter"></i>
            </a>
            <!--telegram-plane -->
            <a href="{{$tim->telegram}}" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
                <i class="fab fa-telegram-plane"></i>
            </a>
        </div>
        <!-- Grid column -->
        @endforeach
    </div>
    <!-- Grid row -->
</section>
<!-- Section: Team v.2 -->

@endsection