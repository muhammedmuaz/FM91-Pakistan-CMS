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
                                        Add Podcast Cover
                                    </button>


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">Podcast Cover</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="" class="my_forms row" method="POST" action="/RMS/add-edit-podcast.php">

                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                            <h5>Podcast Name</h5>
                                                            <input type="Name" class="form-control"
                                                                placeholder="Podcast Name" name="podcast_name" required>
                                                                <h5>RJ Name</h5>
                                                            <input type="Name" class="form-control"
                                                                placeholder="RJ Name" name="rj_name" required>
                                                                <h5>Description</h5>
                                                                <textarea name="podcast_desc"  class="form-control" id="" cols="15" rows="8" placeholder="Podcast Description" required></textarea>
                                                                <h5>Cover Picture</h5>
                                                                <input class="form-control" type="file" name="cover_img" id="formFile" required>    
                                                        </div>

                                                        <div
                                                            class="input-group mt-3 mb-3 col-lg-12 col-md-12 col-sm-12">

                                                            <button class="btn btn-primary  golbal_but" name="add_Podcast" type="submit">Add</button>
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
                                                <th>Podcast Name</th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($podcastcovers as $podcastcover)    
                                        <tr>
                                                <td>
                                                    <h6 class="m-0">{{$i++}}</h6>
                                                </td>
                                                <td>
                                                    <h6 class="m-0">{{$podcastcover->podcast_name}}</h6>
                                                </td>

                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary golbal_but"
                                                        data-toggle="modal" data-target="#exampleModalCenter{{$i}}">
                                                        Edit
                                                    </button>

                                                    <!-- Edit Modal -->
                                                    <div class="modal fade" id="exampleModalCenter{{$i}}" tabindex="-1"
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
                                                                    <form id="" class="my_forms row" method="POST" name="Edit_Playlist" action="/RMS/add-edit-playlist.php">

                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                        <h5>Podcast Name</h5>
                                                            <input type="Name" class="form-control"
                                                                placeholder="Podcast Name" name="podcast_name" value="{{$podcastcover->podcast_name}}" required>
                                                                <h5>RJ Name</h5>
                                                            <input type="Name" class="form-control"
                                                                placeholder="RJ Name" name="rj_name" value="{{$podcastcover->author_name}}" required>
                                                                <h5>Description</h5>
                                                                <textarea name="podcast_desc"  class="form-control" id="" cols="15" rows="8" placeholder="Podcast Description" required>{{$podcastcover->description}}</textarea>
                                                                <h5>Cover Picture</h5>
                                                                <input class="form-control" type="file" name="cover_img" id="formFile" required>    
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
                                                        data-toggle="modal" data-target="#exampleModalCenterView{{$i}}">
                                                        View
                                                    </button>

                                                    <!-- View Modal -->
                                                    <div class="modal fade" id="exampleModalCenterView{{$i}}" tabindex="-1"
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
                                                                            <img src="storage/Adds/Fb-1_1670003807.png" style="height: 300px;width: 400px;" alt="" srcset="">
                                                                         <br>
                                                                        <h5>Name: {{$podcastcover->podcast_name}}</h5>
                                                                            <h5>RJ: {{$podcastcover->author_name}}</h5>
                                                                            <div class="description_para">
                                                                                <p>
                                                                                {{$podcastcover->description}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary golbal_but"
                                                        data-toggle="modal" data-target="#exampleModalCenterDelete{{$i}}">
                                                        Delete
                                                    </button>

                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="exampleModalCenterDelete{{$i}}" tabindex="-1"
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
                                                                    <form id="" class="my_forms row" method="POST" action="/RMS/add-edit-playlist.php">

                                                                        <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                                                            <input type="hidden" name="Delete_Name" value="21">
                                                                         <input type="hidden" name="Delete_Id" value="12">
                                                                             <h5>Are you sure you want to delete this <br> Podcast ?</h5>
                                                                        </div>
                                                                                <button class="btn btn-primary  golbal_but" type="submit" name="Delete_Playlist" >Yes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
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


<!-- Footer -->
<x-footer/>
