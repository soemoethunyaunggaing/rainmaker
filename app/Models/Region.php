<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $guarded=[];

    public function category()
    {
    	return $this->hasMany('App\Category');
    }

     public function subcategory()
    {
    	return $this->hasMany('App\SubCategory');
    }
    public function data()
    {
    	return $this->hasMany('App\Data');
    }
}
