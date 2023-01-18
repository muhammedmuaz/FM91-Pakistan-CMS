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
                        <div class="col-xl-12 col-md-12 m-b-30 schedule_box playlist_box podcast_box">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach($playlists as $playlist)
                                @if($loop->first)
                                <li class='nav-item'>
                                    <a class='nav-link active show' id='{{$playlist->id}}' data-toggle='tab' href='#playlist_{{$playlist->id}}' role='tab' aria-controls='playlist_{{$playlist->id}}' aria-selected='tr'>{{$playlist->playlistname}}</a>
                                    </li>
                                @else
                                <li class='nav-item'>
                                    <a class='nav-link' id='{{$playlist->id}}' data-toggle='tab' href='#playlist_{{$playlist->id}}' role='tab' aria-controls='playlist_{{$playlist->id}}' aria-selected='tr'>{{$playlist->playlistname}}</a>
                                </li>
                                @endif 
                                @endforeach                      
                            </ul>



                            <div class="tab-content" id="myTabContent">

@foreach($playlists as $playlist)
@if($loop->first)
                                <div class="tab-pane fade active show" id="playlist_{{$playlist->id}}" role="tabpanel" aria-labelledby="home-tab">
                                <div class="cards-list row podcast_box_inner">
                                        <div class="col-xl-12 col-md-12 m-b-30">
                                            <div class="tab-content" id="myTabContent">


                                            <div class="tab-pane fade active show" id="playlist1_inner_{{$playlist->id}}" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <a href="/Playlistform/{{$playlist->id}}" class="btn read_bore_but" id="">Add</a>
                                                        </div>
                                                        <div class="cards-list row">
                                                        @foreach($playlistsongs as $playlistsong)
                                                        @if($playlistsong->playlist_id == $playlist->id)            
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="card">
                                                                <img class="card-img-top" src="storage/playlist/Pictures/{{$playlistsong->song_pic}}" alt="Card image cap">
                                                                <div class="card-body">
                                                                    <div class="card_title title-white">
                                                                    <h4>Song Name: {{$playlistsong->song_name}}</h4>

                                                                    </div>
                                                                    <audio controls preload="metadata">FM91 Pakistan
                                                                        <source src="storage/playlist/Songs/{{$playlistsong->song_audio}}" type="audio/ogg">
                                                                    </audio>


                                                                </div>
                                                                <div class="card_hover_btns">
                                                                    <a href="/PlaylistsongeditPage/{{$playlistsong->id}}" class="btn card_hover_but" id="">Edit</a>
                                                                    <a href="/DeletePlaylistsong/{{$playlistsong->id}}" class="btn card_hover_but" id="">Delete</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach

                                                        <div class="col-lg-12" style="user-select: auto;">
                                                            
                                                            <a href="#" class="btn read_bore_but" id="loadMore" style="user-select: auto;">Read More</a>
                                                        </div>
                                                        
                                                    </div>

                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
@else

                                <div class="tab-pane fade" id="playlist_{{$playlist->id}}" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="cards-list row podcast_box_inner">
                                        <div class="col-xl-12 col-md-12 m-b-30">
                                            <div class="tab-content" id="myTabContent">


                                            <div class="tab-pane fade active show" id="playlist1_inner_{{$playlist->id}}" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <a href="/Playlistform/{{$playlist->id}}" class="btn read_bore_but" id="">Add</a>
                                                        </div>
                                                    <div class="cards-list row">
                                                    @foreach($playlistsongs as $playlistsong)
                                                        @if($playlistsong->playlist_id == $playlist->id)
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="card">
                                                                <img class="card-img-top" src="storage/playlist/Pictures/{{$playlistsong->song_pic}}" alt="Card image cap">
                                                                <div class="card-body">
                                                                    <div class="card_title title-white">
                                                                    <h4>Song Name: {{$playlistsong->song_name}}</h4>

                                                                    </div>
                                                                    <audio controls preload="metadata">FM91Pakistan
                                                                        <source src="storage/playlist/Songs/{{$playlistsong->song_audio}}" type="audio/ogg">
                                                                    </audio>


                                                                </div>
                                                                <div class="card_hover_btns">
                                                                    <a href="/PlaylistsongeditPage/{{$playlistsong->id}}" class="btn card_hover_but" id="">Edit</a>
                                                                    <a href="/DeletePlaylistsong/{{$playlistsong->id}}" class="btn card_hover_but" id="">Delete</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endif
                                                    @endforeach    
                                                        <div class="col-lg-12" style="user-select: auto;">
                                                            
                                                            <a href="#" class="btn read_bore_but" id="loadMore" style="user-select: auto;">Read More</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>     
@endif
@endforeach                                


<!-- Footer -->
<x-footer/>
