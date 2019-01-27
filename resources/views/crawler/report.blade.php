 <div class="modal fade" id="modal-report">
                <div class="modal-dialog"  style="width: 800px">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body"> 
    <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Product Details</a></li>
  <li><a data-toggle="tab" href="#menu1">Chart</a></li>
  <li><a data-toggle="tab" href="#menu2">Prices List </a></li>
</ul>                
<div style="padding-bottom: 20px;"></div>

                 <div class="center-block msg">
                    <div class="alert alert-success" style="display:none"></div>
                    <div class="alert alert-danger" style="display:none"></div>
                  </div>
                
    <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
               <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="add-data-report" action="{{url('/admin/load/store')}}" >


        
                <div class="form-group">
                    <label for="name_en" class=" col-md-2">Url :</label>
                    <div class=" col-md-10">
                       <input type="text" class="form-control" name="url" value="" placeholder="" required disabled="">
                    </div>
                   
               
                </div>
          
<input type="hidden" name="id" id="pid">
               
                <div class="form-group">
                    <label for="name_en" class=" col-md-2">Title :</label>
                    <div class=" col-md-10">
                       <input type="text" class="form-control title" name="title" id="title" value="" placeholder="" required disabled="">
                    </div>
                </div>
                  <div class="form-group">
                    <label for="name_en" class=" col-md-2">Price :</label>
                    <div class=" col-md-10">
                       <input type="text" class="form-control price" name="price" id="price" value="" placeholder="" required disabled="">
                    </div>
                </div>

                       <div class="form-group">
                    <label for="name_en" class=" col-md-2">Description :</label>
                    <div class=" col-md-10">
                      <textarea id="desc" name="desc" class="form-control desc" disabled=""></textarea>
                    </div>



                    <span class="myimg"> </span>


                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger check" >Check Now</button>
                    </div>
                 </form> 
                    <!-- end form --> 



</div>
<div id="menu1" class="tab-pane fade">
  

 <div id="chartContainer" style="height: 300px; width: 100%;"></div>

  </div>

<div id="menu2" class="tab-pane fade">

  <table id="pricetable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>price</th>
                <th>date</th>
                <th>time</th>
           
            </tr>
        </thead>
        <tbody>

 

</tbody>
</table>
</div>
  </div>


                  </div>

                  

                      

            <!-- /.modal-content -->
                  </div>
          <!-- /.modal-dialog -->
