@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content')
@include('section.table')

@include('crawler.form')
@include('crawler.report')

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


<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script>
    $(document).ready(function(){
         
          $("[name='url']").click(function() {
      
       $(".btn-primary").addClass("hide");
          
      });

       $(".check").click(function() {
       
   
              $.ajax({
              type:'GET',
              url:"{{url('cron')}}?id=" + $('#pid').val(),
              success: function(data)
              {
               
               getData($('#pid').val());
              }
            })
      });

            $('#modal-add-open').on('click', function() {
           $('.modal-title').html('<h4><b>Add Products</b></h4>');
           $('#add-data')[0].reset(); 
           $('.shop-detail').show();
           $('.user-detail').show(); 
           $('.result').hide()
         });

              $('#url').on('click', function() {
                    $('.result').hide();
                    $('.btn-primary').hide();
                    $(".btn-primary").addClass("hide");
                    $('#load').show();
           var url = $('[name=url]').val();
              $.ajax({
              type:'GET',
              url:"load",
              data:{
                url:url
              },     beforeSend: function() 
           {
             $('#load').html('<svg width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-coffee" style="background: none;"><defs><linearGradient id="gradient" x1="0%" x2="0%" y1="0%" y2="100%"><stop offset="10%" stop-color="black" stop-opacity="0"></stop><stop offset="100%" stop-color="white" stop-opacity="1"></stop></linearGradient><mask id="mask" maskUnits="userSpaceOnUse" x="0" y="0" width="100" height="100"><rect x="22" y="8" width="56" height="54" fill="url(#gradient)"></rect></mask><path id="steam" d="M0-4c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9l0,0c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9l0,0 c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9l0,0c-2.1,2.6-2.1,6.4,0,9l0,0 c2.1,2.6,2.1,6.4,0,9l0,0c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9c-2.1,2.6-2.1,6.4,0,9l0,0c2.1,2.6,2.1,6.4,0,9l0,0 c-2.1,2.6-2.1,6.4,0,9h0c2.1,2.6,2.1,6.4,0,9h0c-2.1,2.6-2.1,6.4,0,9h0c2.1,2.6,2.1,6.4,0,9" stroke-width="6" stroke-linecap="round" fill="#f00" stroke="#abbd81"></path></defs><g mask="url(#mask)"><use x="29" y="-7.63012" href="#steam"><animate attributeName="y" calcMode="linear" values="4;-14" keyTimes="0;1" dur="0.5" begin="0s" repeatCount="indefinite"></animate></use><use x="47" y="-5.26025" href="#steam"><animate attributeName="y" calcMode="linear" values="0;-18" keyTimes="0;1" dur="0.25" begin="0s" repeatCount="indefinite"></animate></use><use x="64" y="-12.4452" href="#steam"><animate attributeName="y" calcMode="linear" values="-4;-22" keyTimes="0;1" dur="0.3333333333333333" begin="0s" repeatCount="indefinite"></animate></use></g><path d="M81.2,52.5l-5.2,0V49c0-1.6-1.3-3-3-3H20c-1.6,0-3,1.3-3,3v11.6C17,71.3,25.7,80,36.5,80h20.1 c7.1,0,13.3-3.8,16.7-9.5h8.3c5.2,0,9.3-4.4,9-9.6C90.2,56.1,86,52.5,81.2,52.5z M81.5,67.5h-6.8c0.8-2.2,1.3-4.5,1.3-7v-5h5.5 c3.3,0,6,2.7,6,6S84.8,67.5,81.5,67.5z" fill="#e15b64"></path><path d="M78.8,88H19.2c-1.1,0-2-0.9-2-2s0.9-2,2-2h59.5c1.1,0,2,0.9,2,2S79.9,88,78.8,88z" fill="#f47e60"></path></svg>')
           },
              success: function(data)
              {

                if(data.code == 200)
                {
                $('.result').show();
                $('#load').hide();
                $('.alert').hide();
                $('.alert-success').hide();
                $(".btn-primary").removeClass("hide");
                $('.alert-danger').hide();
                $('.title').val(data.title);
                $('.price').val(data.price);  
                $('.desc').val(data.desc);

                if(data.price){
                    $('.btn-primary').show();
                }
                }
                if(data.code == 400){
                           $('#load').hide();
                           $('.alert').show();
                           $('.alert-success').hide();
                           $(".btn-primary").removeClass("hide");
                           $('.alert-danger').show();
                           $(".msg").show();   
                           $('.alert-danger').html('<p id="old">Invalid Url</p>');
              }
              }
            });
          
         });


          $('.table').DataTable({
              processing: true,
              serverSide: true,
              ajax: '{{url("/admin/load/table")}}',
              columns:{!!$table!!}
          });

      

    $('#add-data').submit(function(e){
               e.preventDefault();     
              // alert();
          $('.old').remove();
               $.ajax({
                  url: $('#add-data').attr('action'),
                  method: 'post',
                  data: new FormData(this),
                  contentType: false,
                  cache: false,
                  processData:false,
                  success: function(data){
                   if(data.success)
                  {
                    $(".succ").remove();
                    $('.alert').hide();
                    $('.alert-danger').hide();
                    $('.alert-success').show();
                    $('.alert-success').html('<p>'+data.success+'</p>');
                    $('#add-data')[0].reset();  
                    $('.table').DataTable().ajax.reload();
                    $("#form").hide();
                    $(".msg").show();
                    var imageurl = "/images/";
                    $(".msg").append('<img class="img-responsive succ center-block" src="images/check-circle.gif">');
                    $('.modal-footer .btn-primary').hide();
                    setTimeout(function() { $('#modal-add').modal('hide'); }, 1000);
                 //   $('.nav-tabs').hide();
                  }
                  if(data.errors)
                  {
                      $('.alert').show();
                      $('.alert-danger').show();
                      $('#old').remove()
                      $(".succ").remove();
                      $(".msg").show();
                      $('.alert').show();
                      $('.alert-success').hide();
                      $.each(data.errors, function(key, value){
               $('.alert-danger').append('<p id="old">'+value+'</p>');
                      });
                 }
                 } 
                  });


    });


      $('body').on('click', '[data-act=ajax-modal-del]', function (e) {
            var id = $(this).data('id');
                bootbox.confirm("Are you sure want to delete?", function(result) {
                  if(result){
            $.ajax({
              type:'GET',
              url:"{{$page['delete_url']}}/" + id,
              success: function(data)
              {
                  if(data.success){
                bootbox.alert(data.success, )
                    $('.alert').show();
                    $('.alert-danger').html('<p>'+data.success+'</p>');
                    $('.table').DataTable().ajax.reload();
                  }
                  if(data.error){
                

               bootbox.alert(data.error, )
                   $('.alert').show();
                   $('.alert-danger').html('<p>'+data.error+'</p>');
                   $('.table').DataTable().ajax.reload();
             
                      
                  }
              }
            });
          }
            });
      });

      $('body').on('click', '[data-act=ajax-modal]', function (e) {
        $('[name=users_id]').val("");
            var id = $(this).data('id');
              getData(id); 
      }); 

       $('body').on('click', '[data-act=ajax-user]', function (e) {
        $('[name=id]').val("");
            var id = $(this).data('id');
              getUser(id); 
      });  





//var imageurl ="{{url('/images/make')}}/";

function getData(id){

 
                  $('#modal-report').modal('show');
     // $('#pricetable').DataTable().ajax.reload();

           $(".msg").hide();

   
           $('.alert-success').hide();
           $('.modal-title').html('<h4><b>View Product</b></h4>');

            $('#pricetable').DataTable({
                  destroy: true,

              processing: true,
              serverSide: true,
                paging: false,
    searching: false,
              ajax: '{{url("/admin/load/table")}}/' + id,
            "columns": [
            { "data": "price" },
            { "data": "date" },
            { "data": "time" },
          
        ]
          });
            $.ajax({
              type:'GET',
              url:"{{ url('/admin/get/product') }}/" + id,
              success: function(data)
              {









                $("#result").show();
                //$('#add-data')[0].reset();
            $.each(data.html, function(key, value)
             {
              $('[name='+key+']').val(value);
              
             });
            if(data.image){
              $('.myimg').html('<img src='+data.image+' width="100px">');

            }





var dataPoints = [];

var options =  {
  animationEnabled: true,
  theme: "light2",
  title: {
    text: "Price "
  },
  axisX: {
    valueFormatString: "YYYY-MM-DD HH:MM",
  },
  axisY: {
    title: "RP",
    titleFontSize: 24,
    includeZero: false
  },
  data: [{
    type: "spline", 
    yValueFormatString: "RP######",
    dataPoints: dataPoints
  }]
}


function addData(data) {


  for (var i = 0; i < data.length; i++) {

    dataPoints.push({
      x: new Date(data[i].date *1000),
      y: data[i].units
    });
  }
  $("#chartContainer").CanvasJSChart(options);

}

$.getJSON("{{url('admin/report')}}/"+id, addData);




                $('#modal-report').modal('show');
             }
            });
}


     


});

</script>

@stop
