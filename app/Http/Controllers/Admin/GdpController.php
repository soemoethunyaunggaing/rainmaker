<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Gdp;
use Illuminate\Http\Request;

class GdpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.gdp.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gdp.create');

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gdp  $gdp
     * @return \Illuminate\Http\Response
     */
    public function show(Gdp $gdp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gdp  $gdp
     * @return \Illuminate\Http\Response
     */
    public function edit(Gdp $gdp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gdp  $gdp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gdp $gdp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gdp  $gdp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gdp $gdp)
    {
        //
    }
}
