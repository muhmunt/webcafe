<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterWorkshop extends Model
{

    protected $table = 'register_workshops';
    protected $fillable = [
        'new_id','nama','email','number_telp','status','delete_is','size_chart'
    ];

    public function news(){
        return $this->belongsTo('App\News','new_id');
    }
}
