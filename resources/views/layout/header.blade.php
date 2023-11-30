<!doctype html>
<html lang="en">
<head> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <link rel="icon" type="image/png" href="{{ url('/assets/favicon.png') }}">
 
   
 <link href="{{ url('/assets/css/selectize.css') }}" rel="stylesheet"/>
 <link href="{{ url('/assets/dist/libs/selectize/dist/css/selectize.css') }}" rel="stylesheet"/>
 <link href="{{ url('/assets/dist/libs/flatpickr/dist/css/flatpickr.min.css') }}" rel="stylesheet"/>
 <link href="{{ url('/assets/dist/libs/nouislider/distribute/nouislider.min.css') }}" rel="stylesheet"/>

 <!-- <link href="<?php //echo base_url();?>assets/dist/libs/jqvmap/dist/jqvmap.min.css?1607377132" rel="stylesheet"/> -->
 <link href="{{ url('/assets/dist/css/tabler.min.css') }}" rel="stylesheet"/>
 <link href="{{ url('/assets/css/tabler-flags.min.css') }}" rel="stylesheet"/>
  <link href="{{ url('/assets/css/tabler-payments.min.css') }}" rel="stylesheet"/>
  <link href="{{ url('/assets/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
  <link href="{{ url('/assets/css/demo.min.css') }}" rel="stylesheet"/>
 
 <link href="{{ url('/assets/DataTables/css/jquery.dataTables.css') }}" rel="stylesheet" type="text/css" />
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
 <!-- <script src="<?php //echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script> -->
 <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
 
 <style type="text/css">
   #cke_textarea, .cke_editor_textarea {
    width: auto !important;
  } 
  
  .text-dark {
    color: #fafafa!important;
}

.error { color: red}
  
</style>

</head>

<style type="text/css">
 .verticalLine {
  border-left: thick ;
}
select
{
  margin-bottom: 20px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button
{
  border: 1px solid #1f6bc4 !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover
{
  background-color: #1f6bc4 !important;
  color: #fff !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover
{
  background: linear-gradient(#1f6bc4 100%, #1f6bc4 100%);
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover 
{
  background: linear-gradient(#1f6bc4 100%, #1f6bc4 100%);
  color: #fff !important;
}
   
      .no-footer{
        border-bottom: rgba(101,109,119,.16) !important;
      }
    </style>
