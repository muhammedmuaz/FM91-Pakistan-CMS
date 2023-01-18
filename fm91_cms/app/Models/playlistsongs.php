<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlistsongs extends Model
{
    protected $fillable = [
        'id',
        'song_name',
        'song_desc',
        'song_pic',
        'song_audio',
        'playlist_id',
    ];
    use HasFactory;
}
