<?php

namespace App\Http\Controllers;

use App\Returns;
use Illuminate\Http\Request;

class ReturnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $return = Returns::all();
        return view('Admin.return.index',compact('return'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Returns::create($request->all());
        return redirect('/return');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Return  $return
     * @return \Illuminate\Http\Response
     */
    public function show(Returns $returns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Return  $return
     * @return \Illuminate\Http\Response
     */
    public function edit(Returns $returns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Return  $return
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Returns $returns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Return  $return
     * @return \Illuminate\Http\Response
     */
    public function destroy(Returns $returns)
    {
        //
    }
}