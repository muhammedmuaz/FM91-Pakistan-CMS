<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $fillable = [
        'id',
        'event_name',
        'event_description',
        'event_img'
    ];
    use HasFactory;
}
