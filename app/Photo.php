<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $uploads = '/images/';

    protected $fillable = ['image'];


    public function getImageAttribute($image){

       return $this->uploads . $image;
    }

}
