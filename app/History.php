<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable= [
        'title',
        'description',
        'tgl_mulai',
        'tgl_akhir',
        'foto',
        'location',
        'author',
        'delete_is',
        'volume',
    ];
}
