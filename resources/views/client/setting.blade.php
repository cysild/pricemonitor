@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content')

@include('client.settingform')
@stop
@section('css')

<style type="text/css">
@media (min-width: 768px){
.modal-dialog {
    width: 500px;
    margin: 30px auto;
}
}
</style>
        @stop


@section('js')

<script src="{{url('/admin')}}/js/bootbox.min.js"></script>
<script src="{{url('/admin')}}/vendor/ckeditor/ckeditor.js"></script>
<script src="{{url('/admin')}}/vendor/ckeditor/adapters/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('/vendor/adminlte/vendor/toggle')}}/bootstrap-toggle.min.css">
<script src="{{url('/vendor/adminlte/vendor/toggle')}}/bootstrap-toggle.min.js"></script>

<script>
    $(document).ready(function(){


    	 $("[name='statuscheck']").change(function() {
          if($(this).is(":checked")){
              $("[name='status']").val(1);



          }
          if($(this).is(":not(:checked)")){
              $("[name='status']").val(0);
          }


       });

    <?php	 if($shop->is_enable == 1){ ?>
                  var statuss = "on";
                  <?php  }
                 else
                {   ?>

                  var statuss = "off";
         <?php       } ?>
           $('[name=statuscheck]').bootstrapToggle(statuss);
});
    
 </script>


@stop
