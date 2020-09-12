<?php


// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth']], function(){




	Route::get('dashboard','DashboardController@index')->name('dashboard');

	// Route::get('business','BusinessController@index')->name('business.index');
	// Route::get('business/create','BusinessController@create')->name('business.create');
	// Route::post('business/store','BusinessController@store')->name('business.store');
	// Route::patch('business/update/{id}','BusinessController@update')->name('business.update');
	// Route::delete('business/delete/{id}','BusinessController@destroy')->name('business.destroy');


	Route::resource('regions','Admin\RegionController');
	Route::resource('categories','Admin\CategoryController');
	Route::resource('sub-categories', 'Admin\SubCategoryController');

	Route::resource('data','Admin\DataController');
	// Route::get('data/getJson/{id}','Api\ApiInvestmentController@getSubCategory');

	Route::get('data/subcategoryData/{id}','Api\ApiInvestmentController@getSubCategory');


	// for gpd

	Route::resource('gdp','Admin\GdpController');
	

	Route::get('jdp', function(){
		return view('admin.chin.jdp');
	});
	Route::get('sector', function(){
		return view('admin.chin.sector');
	});
	Route::get('distriction', function(){
		return view('admin.chin.distriction');
	});
	Route::get('budgets', function(){
		return view('admin.chin.budget');
	});

	

});


Route::get('/', function(){
	return view('frontend.home');
});
Route::group(['prefix'=>'aa','as'=>'aa.'], function(){

	Route::get('/','HomeController@index');
	Route::get('dashboard', 'HomeController@data');
	
	Route::get('dashboard/data/{id}','HomeController@getData');

});

