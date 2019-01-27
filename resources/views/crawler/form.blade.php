 <div class="modal fade" id="modal-add">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">{{$page['subtitle']}}</h4>
                    </div>
                    <div class="modal-body"> 
                    
                <div class="center-block msg">
                    <div class="alert alert-success" style="display:none"></div>
                    <div class="alert alert-danger" style="display:none"></div>
                  </div>
                
                <div id="form">  
               <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="add-data" action="{{url('/admin/load/store')}}" >


                <div class="shop-detail">
                <div class="form-group">
                    <label for="name_en" class=" col-md-2">Url :</label>
                    <div class=" col-md-10">
                       <input type="text" class="form-control" name="url" value="" placeholder="" required>
                    </div>
                   
                    {{csrf_field()}}
                </div>
          

          <div class="result" style="display: none;">
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
                    <input type="hidden" name="price" class="price">
                    <input type="hidden" name="title" class="title">
                    <input type="hidden" name="desc" class="desc">

                </div>
            
          </div>

              </div>

       <span id="load"></span>
              
                    </div>
                    <div class="modal-footer">
                      
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <a href="javascript:void(0)" id="url" class="btn btn-warning">Load</a>
                      <button type="submit" class="btn btn-primary hide">save</button>
                    </div>
                 </form> 
                    <!-- end form --> 

                  </div>

                  

                  </div>
                      

            <!-- /.modal-content -->
                  </div>
          <!-- /.modal-dialog -->
        </div>