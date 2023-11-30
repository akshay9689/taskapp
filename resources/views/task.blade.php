@include('layout.header')
 @include('layout.nav')
 <div class="container" style="margin-top: 40px;">     
    
    @if (session()->has('success'))
    <div class="alert alert-success" id="alert"> 
        {{ session('success')}}
    </div>
    @endif

    @if (session()->has('failed'))
    <div class="alert alert-danger" id="alert"> 
        {{ session('failed')}}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Task</h3>
          <div class="col-auto ms-auto d-print-none">
            
            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report" style="background-color: #1f6bc4;">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                Add Task
            </a>
          </div>
        </div>

{{--        
          <h2 class="float-right"><a href="{{url('export-excel-csv-file/xlsx')}}" class="btn btn-success mr-1">Export Excel</a><a href="{{url('export-excel-csv-file/csv')}}" class="btn btn-success">Export CSV</a></h2> --}}
        
  
        <div class="table-responsive" style="padding: 19px;">
          <table class="table card-table table-vcenter text-nowrap datatable" id="example">
            <thead>
              <tr>
                <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                <th class="w-1">No. <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
                </th>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Mark Task As Complete </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
  
             @php
              $i=1;
             @endphp
              
           @foreach ($data as $row) 

                <tr id="id<?php //echo $row->id;?>">
                <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                <td><span class="text-muted"><?php  echo $i; ?></span></td>
                <td>{{$row->title}}</td>
                <td><?php echo wordwrap($row->description,30,"<br>\n");?></td>
                <td>{{$row->due_date}}</td>
                <td>
                 <?php
                  if($row->mark_as_complete == '0') {
                  ?>
                  <input type="checkbox" id="{{$row->id}}" onclick="status('{{$row->id}}','1');" name="vehicle1" value="1" >
                  <?php } else if($row->mark_as_complete == '1') { 
                   ?>
                 <input type="checkbox" id="{{$row->id}}" onclick="status('{{$row->id}}','0');" name="vehicle1" value="0" checked>
                 <?php } ?>
                  </td>
                <td class="text-end">
                 <a onclick="viewFuncion('{{$row->id}}');"><i class="fa fa-eye" style="color: #1f6bc4;"></i></a>  
                 <a onclick="editFuncion('{{$row->id}}');"><i class="fa fa-pencil" style="color: #1f6bc4;"></i></a>
                 <a onclick="deleteFuncion('{{$row->id}}');"><i class="fa fa-trash" style="color: red;"></i></a>&nbsp;
               </td>
             </tr>
             @php
             $i++;
             @endphp
           @endforeach
         </tbody>
       </table>
     </div>
   </div>
  </div>
  </div>
  </div>
  </div>
  
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
  <script src="{{ url('assets/dist/libs/litepicker.js') }}"></script>
    <!-- modal use here -->
    <div class="modal modal-blur fade" id="modal-report"  role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form name="form1" action="/task" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                
                 
              
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" name="example-text-input" placeholder="" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description"  class="form-control" cols="30" rows="10"></textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Due Date</label>
                <input type="date" name="due_date" class="form-control" name="example-text-input" placeholder="" required>
              </div>
  
            <div class="modal-footer">
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Cancel
              </a>
              <button type="submit" class="btn btn-primary ms-auto">
                Submit
              </button>
            </div>
        </div>
          </form>
        </div>
      </div>
    </div>
  
    <!--edit modal-->
    <!-- modal use here -->
    <div class="modal modal-blur fade" id="modal-edit"  role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
           <form name="form1" action="/update_task" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="modal-body">
              <input type="hidden" name="id" id="id_e">
              
              <div class="mb-3">
                <label class="form-label">Task Name</label>
                <input type="text" name="title" id="title_e" class="form-control" name="example-text-input" placeholder="">
              </div>

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description_e"></textarea>
              </div>
  
              <div class="mb-3">
                <label class="form-label">Due Date</label>
                <input type="text" name="due_date" id="due_date_e" class="form-control" name="example-text-input" placeholder="">
              </div>
              
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                Cancel
              </a>
              <button type="submit" id="btn-save" class="btn btn-primary ms-auto">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!--view modal-->
    <div class="modal modal-blur fade" id="modal-view" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">View Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <!-- <form name="form1" action="" method="post"> -->
            <div class="modal-body">
  
             <input type="hidden" name="id" id="id_v">
             
  
            <div class="mb-3">
              <label class="form-label">Task Name</label>
              <input type="text" name="title" id="title_v" class="form-control" readonly name="example-text-input" placeholder="">
            </div>

            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea class="form-control" name="description" id="description_v"readonly></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label">Due Date</label>
              <input type="text" name="due_date" id="due_date_v" class="form-control"readonly name="example-text-input" placeholder="">
            </div>
                   </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
            
          </div>
          <!--     </form> -->
        </div>
      </div>
    </div>
  
    <!--delet modal-->
    <div class="modal modal-blur fade" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-status bg-danger"></div>
          <form method="post" action="/delete_task">
            <div class="modal-body text-center py-4">
              <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v2m0 4v.01" /><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" /></svg>
              <input type="hidden" id="cat_id" name="id">
              <input type="hidden" id="cat_status" name="status">
              <h3>Are you sure?</h3>
              <div class="text-muted">Are you sure, do you change Category status?</div>
            </div>
            <div class="modal-footer">
              <div class="w-100">
                <div class="row">
                  <div class="col"><a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal"
                    onClick="window.location.reload();">
                    Cancel
                  </a></div>
                  <div class="col"><button type="submit" class="btn btn-info w-100">
                    Yes
                  </button></div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    
    <!--delet modal-->
  <div class="modal modal-blur fade" id="modal-pcdelete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-status bg-danger"></div>
        <form method="post" action="/delete_task">
            @csrf
          <div class="modal-body text-center py-4">
  
            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v2m0 4v.01" /><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" /></svg>
            <input type="hidden" id="hidd2" name="hidd2">
            <h3>Are you sure?</h3>
            <div class="text-muted">Do you really want to remove this Blog Category?</div>
          </div>
          <div class="modal-footer">
            <div class="w-100">
              <div class="row">
                <div class="col"><a href="#" class="btn btn-white w-100" data-bs-dismiss="modal">
                  Cancel
                </a></div>
                <div class="col"><button type="submit" class="btn btn-danger w-100">
                  Delete
                </button></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript">

function status(id, status) {

  $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
     url: "{{route('change_status')}}",
      type: "POST",
      data: {id : id, status:status},
      //dataType: "json",
      success: function(data)
      {
        console.log(data);
        if(data == "OK"){

          if(status == "1"){
           alert("mark as read ");
          }
          else {
            alert("mark as unread");
          }

        }
        
      }
    });

}
  // fetch data in modal
  
  function editFuncion(id) {
    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
     url: "{{route('cat_getById')}}",
      type: "POST",
      data: {id : id},
      dataType: "json",
      success: function(data)
      {
        console.log(data);
        $("#modal-edit").modal("show");
        $("#id_e").val(data.data.id);
        $("#title_e").val(data.data.title);
        $("#due_date_e").val(data.data.due_date);
        $("#description_e").val(data.data.description);
        
      }
    });
  }
  
    //view in modal
    function viewFuncion(id) {
  
      $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
     url: "{{route('cat_getById')}}",
        type: "POST",
        data: {id : id},
        dataType: "json",
        success: function(data)
        {
          console.log(data);
          $("#modal-view").modal("show");
          $("#id_v").val(data.data.id);
          $("#title_v").val(data.data.title);
          $("#due_date_v").val(data.data.due_date);
          $("#description_v").val(data.data.description);
        
          
        }
      });
    }
  
 
  function deleteFuncion(id) {
   $("#modal-pcdelete").modal("show");
   $("#hidd2").val(id);
  }
  </script>
  
  <script type="text/javascript">
    $(document).on('click','.cat_status',function(){
  
     var id = $(this).attr('uid'); //get attribute value in variable
     var status = $(this).attr('ustatus'); //get attribute value in variable
     $('#cat_id').val(id); //pass attribute value in ID
     $('#cat_status').val(status);  //pass attribute value in ID
     $('#modal-delete').modal("show"); //show modal popup
  
    });
  </script>

@include('layout.footer')
@include('layout.footer_script')
  
  
  