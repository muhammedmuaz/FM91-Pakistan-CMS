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
                                        Add Playlist
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                            <form id="" class="my_forms row" method="POST" action="/AddPlaylistName">                                                
                                                @csrf
                                                <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                <h5>Playlist Heading</h5>    
                                                <select class="form-control" name="playlisthead_id" required>
                                                  @foreach($playlistsheadings as $playlistsheading)
                                                  <option value='{{$playlistsheading->id}}'  style="color: black;">{{$playlistsheading->Name}}</option>
                                                  @endforeach
                                                </select>
                                                    <h5>Playlist Name</h5>
                                                    <input type="Name" class="form-control"
                                                                placeholder="Playlist Name" name="playlistname" required>
                                                        </div>

                                                        <div
                                                            class="input-group mt-3 mb-3 col-lg-12 col-md-12 col-sm-12">

                                                            <button class="btn btn-primary  golbal_but" name="add_Playlist" type="submit">Add</button>
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

                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>S.No </th>
                                                <th>Playlist Name</th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($playlists as $playlist)
                                            <tr>
                                                <td>
                                                    <h6 class="m-0">{{$playlist->id}}</h6>
                                                </td>
                                                <td>
                                                    <h6 class="m-0">{{$playlist->playlistname}}</h6>
                                                </td>

                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary golbal_but"
                                                        data-toggle="modal" data-target="#exampleModalCenter{{$playlist->id}}">
                                                        Edit
                                                    </button>

                                                    <!-- Edit Modal -->
                                                    <div class="modal fade" id="exampleModalCenter{{$playlist->id}}" tabindex="-1"
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
                                                                    <form id="" class="my_forms row" method="POST" name="Edit_Playlist" action="updatePlaylist/{{$playlist->id}}">
                                                                        @csrf
                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                            <h5>Playlist Name</h5>
                                                                            <input type="Name" class="form-control" name="playlistname"
                                                                                 value="" required>
                                                                        </div>

                                                                        <div
                                                                            class="input-group mt-3 mb-3 col-lg-12 col-md-12 col-sm-12">


                                                                            <button class="btn btn-primary  golbal_but" type="submit" name="edit">Save changes</button>
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
                                                        data-toggle="modal" data-target="#exampleModalCenter{{$playlist->playlistname}}">
                                                        View
                                                    </button>

                                                    <!-- View Modal -->
                                                    <div class="modal fade" id="exampleModalCenter{{$playlist->playlistname}}" tabindex="-1"
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
                                                                    <form id="" class="my_forms row" action="">
                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                         <br>
                                                                        <h5>Name:  {{$playlist->playlistname}}</h5>
                                                                            <br>
                                                                            <h5>Total Songs: {{$playlist->total}}</h5>
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
                                                        data-toggle="modal" data-target="#exampleModalDelete{{$playlist->id}}">
                                                        Delete
                                                    </button>

                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="exampleModalDelete{{$playlist->id}}" tabindex="-1"
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
                                                                    <form id="" class="my_forms row" method="GET" action="/deletePlaylist/{{$playlist->id}}">

                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                            <!-- <input type="hidden" name="Delete_Name" value="Hello">
                                                                         <input type="hidden" name="Delete_Id" value="Hello"> -->
                                                                             <h5>Are you sure you want to delete this <br> Playlist</h5>
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
