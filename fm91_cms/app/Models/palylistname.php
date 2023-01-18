<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class palylistname extends Model
{
    protected $fillable = [
        'id',
        'playlistname',
        'total',
        'heading'
    ];
    use HasFactory;
}
