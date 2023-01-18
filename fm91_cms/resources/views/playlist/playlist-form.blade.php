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
                               <div class="col-lg-12 ">

                                @if(empty($playlistId))
                                <h2 class="main_heading">Add PlayList Song</h2>
                                <form id="" class="my_forms row" action="/Playlistsongadd/{{$id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Playlist Show Name -->
                                    <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>Song Name</h5>
                                        <input type="Name" class="form-control" name="songname" placeholder="Show Title" required>
                                    </div>

                                    <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>Show Picture</h5>
                                        <input class="form-control" type="file" name="song_pic" id="formFile" required>
                                      </div>

                                    <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>Show Audio</h5>
                                        <input class="form-control" type="file" name="song_audio" id="formFile" required>
                                      </div>
                                    <div class="input-group mt-3 mb-3 col-lg-12 col-md-12 col-sm-12">


                                    <button class="btn btn-primary  golbal_but">Submit</button>
                                    </div>
                                    </form>
                               
                               
                               @else
                               <h2 class="main_heading">Edit PlayList Song</h2>
                               <form id="" class="my_forms row" action="/Playlistsongedit/{{$playlistsong->id}}" method="POST">
                                    @csrf
                                    <!-- Playlist Show Name -->
                                    <div class="input-group mb-3 col-lg-12 col-md-12 col-sm-12">
                                        <h5>Song Name</h5>
                                        <input type="Name" class="form-control" name="songname" value="{{$playlistsong->song_name}}" placeholder="Show Title" required>
                                    </div>
                                    <div class="input-group mt-3 mb-3 col-lg-12 col-md-12 col-sm-12">
                                    <button class="btn btn-primary  golbal_but">Submit</button>
                                    </div>
                                    </form>
                               @endif
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
