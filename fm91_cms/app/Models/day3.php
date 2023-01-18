<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class day3 extends Model
{

    protected $fillable = [
        'id',    
        'showname',
        'authorname',
        'details',
        'showPicture',
        'starttime',
        'closetime',
    ];
    use HasFactory;
}
