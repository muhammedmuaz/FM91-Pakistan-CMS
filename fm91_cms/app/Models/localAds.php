<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localAds extends Model
{
    protected $fillable = [
        'id',
        'company_name',
        'url',
        'cover',
    ];
    use HasFactory;
}
