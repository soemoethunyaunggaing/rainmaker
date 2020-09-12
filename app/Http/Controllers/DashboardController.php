<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invetment;
use App\MainCategory;
use App\SubCategory;
use App\SubDataCategory;
use DB;
use Charts;
use App\Http\Resources\Invesmets as InvesmentResource;

class DashboardController extends Controller
{
    //

    public function index()
    {	

     // $year=Invetment::selectRaw('year(date)year')
     //                  ->groupBy('year')
     //                  ->orderByRaw('min(date) asc')
     //                  ->pluck('year');
     
     //   $amount=Invetment::selectRaw('year(date)year, sum(amount) as amount')
     //                  ->groupBy('year')
     //                  ->orderByRaw('min(date) desc')
     //                  ->pluck('amount');


    	// $investments=Invetment::count();
     //  $sub_data_categories=SubDataCategory::count(); 

     //    $users = Invetment::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
     //                ->get();
     //    $chart = Charts::database($users, 'bar', 'highcharts')
     //              ->title("Monthly New Customers")
     //              ->elementLabel("Total Customers")
     //              ->dimensions(1000, 500)
     //              ->responsive(false)
     //              ->groupByMonth(date('Y'), true);
       
    	return view('dashboard');
    }

    public function getData()
    {
      $response=Invetment::pluck('sub_data_category_id','amount');

      return response()->json($response);

    }
}
