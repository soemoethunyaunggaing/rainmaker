<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //
    protected $appends = ['region_name','category_name','sub_category_name'];

    protected $guarded=[];

    public function region()
    {
    	return $this->belongsTo('App\Region');
    }

     public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function subCategory()
    {
    	return $this->belongsTo('App\SubCategory');
    }

    public function getRegionNameAttribute(){
         return $this->region->region_name;
    }

     public function getCategoryNameAttribute(){
         return $this->category->category_name;
    }

    public function getSubCategoryNameAttribute(){
         return $this->subCategory->sub_category_name;
    }
}
