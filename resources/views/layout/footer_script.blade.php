


<!-- Libs JS -->

<script src="{{ url('/assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('/assets/dist/libs/jquery/dist/jquery.slim.min.js') }}"></script>
<script src="{{ url('/assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ url('/assets/dist/libs/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ url('/assets/dist/libs/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<!-- Tabler Core -->
<!-- // <script src="<?php //echo base_url();?>assets/js/vendors/tabler.min.js"></script> -->
<script src="{{ url('/assets/dist/js/tabler.min.js') }}"></script>

<script src="{{ url('/assets/js/vendors/jquery-3.2.1.min.js') }}"></script> 
<!--<script src="<?php //echo base_url();?>assets/ckeditor/ckeditor.js"></script> -->

<script src="{{ url('/assets/DataTables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('/assets/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script src="{{ url('/assets/dist/libs/litepicker.js') }}"></script>
  
  

                
                <script>
                  $(document).ready(function(){
                    $('#example').DataTable({
                      autoWidth: false, 
                      "ordering": false
                    });
                  } );
                </script>

                <script type="text/javascript">
                  for(var people_edit in CKEDITOR.instances){
                    CKEDITOR.instances[people_edit].updateElement();
                  }
                </script>
          <script>
         setTimeout(function() {
  $('#alert').hide()
}, 10000);
          </script>

                