<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news';

    protected $fillable= [
        'title',
        'description',
        'tgl_mulai',
        'tgl_akhir',
        'seat',
        'foto',
        'location',
        'author',
        'delete_is'
    ];

    public function registers(){
        return $this->hasMany('App\RegisterWorkshop');
    }
}

