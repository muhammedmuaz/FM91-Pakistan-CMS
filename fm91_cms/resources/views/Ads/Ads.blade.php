<x-header/>
  <!-- [ Main Content ] start -->
  <div class="pcoded-main-container">
      <div class="pcoded-wrapper">
          <div class="pcoded-content">
              <div class="pcoded-inner-content">
                    @if($errors->any())
                  <div class="form-group">
                  <div class="alert alert-danger" role="alert">
                  @foreach ($errors->all() as $err)
                  <li>{{$err}}</li>
                  @endforeach
                  </div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="form-group">
                  <div class="alert alert-danger" role="alert">
                  <li>{{Session::get('fail')}}</li>
                  </div>
                  @endif
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!--[ daily sales section ] start-->
                                
                                <!--[ daily sales section ] end-->
                                <!--[ Monthly  sales section ] starts-->
                                
                                <!--[ Monthly  sales section ] end-->
                                <!--[ year  sales section ] starts-->
                                
                                <div class="col-xl-12 col-md-12 m-b-30 playlist_add_sec">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary golbal_but" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Create an Add
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Company Name</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        
                                        </div>
                                        
                                        <div class="modal-body">
                                            <form id="" class="my_forms row" method="POST" action="/storeAdd" enctype="multipart/form-data">                                                
                                                @csrf
                                                <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                <h5>Company Name</h5>
                                                        <input type="Name" class="form-control" placeholder="Company Name" name="company_name"
                                                            value="" required>
                                                            <h5>Add URL</h5>
                                                        <input type="Name" class="form-control" placeholder="URL" name="add_url"
                                                            value="" required>            
                                                                    
                                                            <h5>Cover Picture</h5>
                                                                <input class="form-control" type="file" name="add_img" id="formFile" required>
                                                </div>
                                                        <div
                                                            class="input-group mt-3 mb-3 col-lg-12 col-md-12 col-sm-12">
                                                            <button class="btn btn-primary  golbal_but" name="add_Playlist" type="submit">Add</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                    </div>
                                    </div>

                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>S.No </th>
                                                <th>Companies</th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
@foreach ($Adds as $Add)
                                            <tr>
                                                <td>
                                                    <h6 class="m-0">{{$Add->id}}</h6>
                                                </td>
                                                <td>
                                                    <h6 class="m-0">{{$Add->company_name}}</h6>
                                                </td>

                                                <td>
                                                    
                                               
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary golbal_but"
                                                        data-toggle="modal" data-target="#exampleModalCenterView{{$Add->id}}">
                                                        View
                                                    </button>

                                                    <!-- View Modal -->
                                                    <div class="modal fade" id="exampleModalCenterView{{$Add->id}}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">{{$Add->company_name}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="" class="my_forms row" action="">
                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                            <img src="storage/Adds/{{$Add->cover}}" style="height: 300px;width: 400px;" alt="" srcset="">
                                                                         <br>
                                                                        <h5>{{$Add->company_name}}</h5>
                                                                            <br>
                                                                        <p>
                                                                        {{$Add->url}}
                                                                        </p>
                                                                        
                                                                    
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <!-- <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Add</button>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary golbal_but"
                                                        data-toggle="modal" data-target="#exampleModalDelete{{$Add->id}}">
                                                        Delete
                                                    </button>

                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="exampleModalDelete{{$Add->id}}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="" class="my_forms row" method="GET" action="/deleteAdd/{{$Add->id}}">

                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                            <!-- <input type="hidden" name="Delete_Name" value="Hello">
                                                                         <input type="hidden" name="Delete_Id" value="Hello"> -->
                                                                             <h5>Are you sure you want to delete this <br> Add</h5>
                                                                           <!-- <input type="Name" class="form-control"
                                                                                placeholder="Playlist Name" required> -->
                                                                        </div>
                                                                                <button class="btn btn-primary  golbal_but" type="submit" name="Delete_Playlist" >Yes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <!-- <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Add</button>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
@endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->




<!-- Footer -->
<x-footer/>
