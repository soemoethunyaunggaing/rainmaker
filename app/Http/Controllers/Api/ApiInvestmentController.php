<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Region;
use App\SubCategory;
use App\Data;


class ApiInvestmentController extends Controller
{
    
     public function getSubCategory($subCategory)
    {
        $sub_category=SubCategory::where('category_id',$subCategory)->pluck('sub_category_name','id');

        return response()->json($sub_category);
    }

    public function data()
    {
      $data=Data::get();
      
       // $value=Data::selectRaw('year(created_at)year, sum(value) as value')
       //                ->groupBy('year')
       //                ->orderByRaw('min(created_at) desc')
       //                ->get();
        // $year=Data::selectRaw('year(created_at)year')
        //               ->groupBy('year')
        //               ->orderByRaw('min(created_at) asc')
        //               ->pluck('year');

        // $value=$data->sum('value');
    	return response()->json($data);
    }
   
}
