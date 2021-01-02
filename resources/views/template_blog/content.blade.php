<!-- SECTION -->
@include('template_blog.head')
  <!--Main Layout-->
  <main  style="margin-top:-50px;" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-5">
                <div class="text-center">
                    <div class="card card-body mb-3 blue-grey lighten-4">
                        <p class="mb-0 mt-0 blue-grey-text">Advertise Here</p>
                    </div>
                </div>
                @yield('isi')
            </div>
            @include('template_blog.widget')
        </div>
    </div>
  </main>
  <!--Main Layout-->
@include('template_blog.footer')