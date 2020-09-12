<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $guarded=[];

    public function region()
    {
    	return $this->belongsTo('App\Region');
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
