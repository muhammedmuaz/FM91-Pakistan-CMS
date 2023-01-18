<x-header/>
  <!-- [ Main Content ] start -->
  <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
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
                                        Add Upcoming Event
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Add Upcoming Event</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        
                                        </div>
                                        
                                        <div class="modal-body">
                                            <form id="" class="my_forms row" method="POST" action="/AddEvent" enctype="multipart/form-data">                                                
                                                @csrf
                                                <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                <h5>Event Title</h5>
                                                        <input type="Name" class="form-control" placeholder="Event Title" name="event_name"
                                                            value="" required>
                                                            <h5>Event Description</h5>
                                                                    <textarea name="event_description"  class="form-control" id="" cols="30" rows="5" placeholder="Event Description" required></textarea>            
                                                                    
                                                            <h5>Event Picture</h5>
                                                                <input class="form-control" type="file" name="event_img" id="formFile" required>
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
                                                <th>Upcoming Events</th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($events as $event)
                                            <tr>
                                                <td>
                                                    <h6 class="m-0">{{$event->id}}</h6>
                                                </td>
                                                <td>
                                                    <h6 class="m-0">{{$event->event_name}}</h6>
                                                </td>

                                                <td>
                                                    
                                               
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary golbal_but"
                                                        data-toggle="modal" data-target="#exampleModalCenterView{{$event->id}}">
                                                        View
                                                    </button>

                                                    <!-- View Modal -->
                                                    <div class="modal fade" id="exampleModalCenterView{{$event->id}}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">{{$event->event_name}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="" class="my_forms row" action="">
                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                            <img src="storage/Events/{{$event->event_img}}" style="height: 400px;" alt="" srcset="">
                                                                         <br>
                                                                        <h5>{{$event->event_name}}</h5>
                                                                            <br>
                                                                        <p>
                                                                        {{$event->event_description}}
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
                                                        data-toggle="modal" data-target="#exampleModalDelete{{$event->id}}">
                                                        Delete
                                                    </button>

                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="exampleModalDelete{{$event->id}}" tabindex="-1"
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
                                                                    <form id="" class="my_forms row" method="GET" action="/deleteEvent/{{$event->id}}">

                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                            <!-- <input type="hidden" name="Delete_Name" value="Hello">
                                                                         <input type="hidden" name="Delete_Id" value="Hello"> -->
                                                                             <h5>Are you sure you want to delete this <br> Event</h5>
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
