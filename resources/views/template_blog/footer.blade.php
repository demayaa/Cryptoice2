        <!-- Footer -->
        <footer class="page-footer font-small indigo mt-5">
        
          <!-- Footer Links -->
          <div class="container">
        
            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="/about">About us</a>
                </h6>
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="/">Products</a>
                </h6>
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="/">Awards</a>
                </h6>
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="/">Help</a>
                </h6>
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="/contact">Contact</a>
                </h6>
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">
        
            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
        
              <!-- Grid column -->
              <div class="col-md-8 col-12 mt-5">
                <p style="line-height: 1.7rem">{{ config('app.name', 'CryptoICE') }} is a discussion group about cryptocurrencies, airdrops, defi, and others.</p>
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
            <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
        
            <!-- Grid row-->
            <div class="row pb-3">
        
              <!-- Grid column -->
              <div class="col-md-12">
        
                <div class="mb-5 flex-center">
        
                  <!-- Facebook -->
                  <a class="fb-ic">
                    <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                  </a>
                  <!-- Twitter -->
                  <a class="tw-ic">
                    <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                  </a>
                  <!-- Google +-->
                  <a class="gplus-ic">
                    <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                  </a>
                  <!--Linkedin -->
                  <a class="li-ic">
                    <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                  </a>
                  <!--Instagram-->
                  <a class="ins-ic">
                    <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                  </a>
                  <!--Pinterest-->
                  <a class="pin-ic">
                    <i class="fab fa-pinterest fa-lg white-text"> </i>
                  </a>
        
                </div>
        
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
        
          </div>
          <!-- Footer Links -->
        
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://cryptoice.biz/">{{ config('app.name', 'CryptoICE') }}</a>
          </div>
          <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
        <!-- jQuery -->
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
        <!-- Your custom scripts (optional) -->
        <script type="text/javascript">
            $(document).ready(function () {
                // SideNav Button Initialization
                $(".button-collapse").sideNav();
                // SideNav Scrollbar Initialization
                var sideNavScrollbar = document.querySelector(".custom-scrollbar");
                var ps = new PerfectScrollbar(sideNavScrollbar);
            });
        </script>
    </body>
</html>
