<?php


namespace App\Http\Controllers;

use App\Models\palylistname;
use App\Models\playlistsongs;
use App\Models\playlistheadings;

use Illuminate\Http\Request;

class playlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $playlists = palylistname::all();
        $playlistsheadings = playlistheadings::all();
        
        return view('playlist/playlist-add', compact('playlists', 'playlistsheadings',));
    }

    public function PlaylistPageindex()
    {
        //
        $playlists = palylistname::all();
        $playlistsheadings = playlistheadings::all();
        $playlistsongs = playlistsongs::all();
        return view('playlist/playlist', compact('playlists', 'playlistsheadings', 'playlistsongs'));
    }


    public function PlaylistPageform($id)
    {

        
        return view('playlist/playlist-form', compact('id'));
    }

    public function PlaylistPageEditform($playlistId)
    {
        $playlistsong = playlistsongs::find($playlistId);

        
        return view('playlist/playlist-form', compact('playlistId', 'playlistsong'));
    }

    public function storePlaylist(Request $request, $id)
    {
        // Song Picture
        $filenameWithExt = $request->file('song_pic')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('song_pic')->getClientOriginalExtension();
        $playlistsongname = $filename.'_'.time().'.'.$extension;
        $request->file('song_pic', 'a+')->storeAs('public/playlist/Pictures',$playlistsongname);

        // Song Audio
        $filenameWithExt2 = $request->file('song_audio')->getClientOriginalName();
        $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
        $extension2 = $request->file('song_audio')->getClientOriginalExtension();
        $playlistsongaudio = $filename2.'_'.time().'.'.$extension2;
        $request->file('song_audio', 'r+')->storeAs('public/playlist/Songs',$playlistsongaudio);

        $playlistsong = new playlistsongs([
            'song_name' => $request->get('songname'),
            'song_pic' => $playlistsongname,
            'song_audio' => $playlistsongaudio,
            'playlist_id' => $id,
        ]);

        $playlistsong->save();
        return redirect('/Playlist');
    }

    public function UpdatePlaylist(Request $request, $id)
    {
        // Update Section 
        $playlistsong = playlistsongs::find($id);
        $playlistsong->song_name = $request->get('songname');
        $playlistsong->save();
        return redirect('/Playlist');
    }

    public function destroyPlaylistSong($id)
    {
        //Destroy Section
        playlistsongs::destroy(array('id',$id));
        return redirect('/Playlist');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // palylistname::create();\
        $playlist = new palylistname([
            'playlistname' => $request->get('playlistname'),
            'total' => 0,
            'heading' => $request->get('playlisthead_id'),
        ]);
        $playlist->save();
        return redirect('/AddPlaylist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $palylist = palylistname::find($id);
        $palylist->playlistname =  $request->get('playlistname');
        $palylist->save();
        return redirect('/AddPlaylist');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        palylistname::destroy(array('id',$id));
        return redirect('/AddPlaylist');
    }
}
