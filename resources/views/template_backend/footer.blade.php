<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('/assets/js/stisla.js') }}"></script>
  <script src="{{ asset('/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('/assets/js/custom.js') }}"></script>
  <script src="{{asset('js/ckeditor.js')}}"></script>
    
  <script>
        let textarea = document.querySelector( '#Content' );
    	BalloonEditor
    		.create( document.querySelector( '#editor' ), {
    			 toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    		} )
    		.then( editor => {
    		    editor.updateSourceElement();
    			window.editor = editor;
    		} )
    		.catch( err => {
    			console.error( err.stack );
    		} );
    	document.getElementById( 'submit' ).onclick = () => {
            textarea.value = editor.getData();
        }
  </script>
</body>
</html>