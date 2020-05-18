<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Data;
use App\Category;
use App\SubCategory;
use App\Region;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas=Data::all();
        $regions=Region::pluck('region_name','id');
        $categories=Category::pluck('category_name','id');
        $sub_categories=SubCategory::pluck('sub_category_name','id');
        return view('admin.data.index', compact('datas','regions','categories','sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $regions=Region::pluck('region_name','id');
        $categories=Category::pluck('category_name','id');
        // $sub_categories=SubCategory::pluck('name','id');
        return view('admin.data.create',compact('regions','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Data::create($request->all());
        return redirect('admin/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        Data::find($id)->update($request->all());
        return redirect('admin/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Data::destroy($id);
        return redirect('admin/data');
    }
    public function subCategoryJson($subcategory)
    {

    }
}
