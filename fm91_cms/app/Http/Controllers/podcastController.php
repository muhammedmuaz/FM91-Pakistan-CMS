<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\podcastcover;

class podcastController extends Controller
{
    //

    public function index()
    {
        //
        $podcastcovers = podcastcover::all();
        $i = 1;
        
        return view('podcast/podcast-cover', compact('podcastcovers', 'i'));
    }
}
