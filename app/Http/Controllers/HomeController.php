<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\SubCategory;
use App\Data;
use App\Category;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        return view('frontend.home');
    }

    public function data(Request $request)
    { 

        $categories=Category::pluck('category_name','id');      
        $regions=Region::pluck('region_name','id');  

        $alldata=Data::orderBy('created_at')->paginate(10);
         
        $all=Data::where('region_id',$request->region_id)->get();
        // dd($all);
       
       

        
        $year=Data::selectRaw('year(start_date)year')
                      ->groupBy('year')
                      ->orderByRaw('min(end_date) asc')
                      ->pluck('year');
      
        $amount=Data::selectRaw('year(created_at)year, sum(value) as value')
                      ->groupBy('year')
                      ->orderByRaw('min(created_at) desc')
                      ->pluck('value');
        // $yangon=Data::where('region_id',1)->get();
        // $yangon=Data::where('region_id',2)->get();
        // $yangon=Data::where('region_id',3)->get();
        // $yangon=Data::where('region_id',4)->get();
        // $yangon=Data::where('region_id',5)->get();
        // $yangon=Data::where('region_id',6)->get();
        // $yangon=Data::where('region_id',7)->get();
        // $yangon=Data::where('region_id',8)->get();
        // $yangon=Data::where('region_id',9)->get();
        // $yangon=Data::where('region_id',10)->get();
        // $yangon=Data::where('region_id',11)->get();
        // $yangon=Data::where('region_id',12)->get();
        // $yangon=Data::where('region_id',13)->get();
        // $yangon=Data::where('region_id',14)->get();
        // $chin=Data::where('region_id',15)->sum('value');
       
        // $ygn_value=$yangon->sum('value');
        // dd($chin);
        return view('frontend.data.R1', compact('regions','all','categories','alldata','year','amount','year1'));
    }

    public function getData( $request)
    {   
        $dd=Data::where('region_id',$request)->get();
       
        return response()->json($dd);
        
    
    }
   
}
