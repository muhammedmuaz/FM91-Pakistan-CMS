<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class podcastcover extends Model
{

    protected $fillable = [
        'id',
        'podcast_name',
        'cover_image',
        'author_name',
        'description'
    ];
    use HasFactory;
}
