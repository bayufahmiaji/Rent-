<?php

namespace App\Http\Controllers;

use App\Returns;
use App\Cars;
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
        $return = new Returns;
        $return->cos_name = $request->cos_name;
        $return->rent_date = $request->rent_date;
        $return->rent_expired = $request->rent_expired;
        $return->status = $request->status;
        $return->car_name = $request->car_name;
        $return->save();

        if($request->status == "Lunas"){
            $status = "available";
        }

        $cars = Cars::find($request->car_id);
        $cars->status = $status;
        $cars->update();

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
