<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'scid', 
        'fullname',
        'office',
        'category',
        'post',
        'post_date'
    ];
}
