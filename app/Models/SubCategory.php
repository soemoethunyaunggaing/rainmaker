<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $guarded=[];

    public function region()
    {
    	return $this->belongsTo('App\Region');
    }

     public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function data()
    {
    	return $this->hasMany('App\Data');
    }
}
