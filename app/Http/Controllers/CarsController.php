<?php

namespace App\Http\Controllers;

use App\Cars;
use Illuminate\Http\Request;
use Auth;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $car = Cars::all();
        if(Auth::user()->role == "admin"){

            return view('admin.car.index',compact('car'));
        
        }
        else{
        
            return view('costumer.car.index',compact('car'));   
        
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
 
        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'public/uploads';
        
        $file->move($tujuan_upload,$nama_file);

        Cars::create([
            'name' => $request->name,
            'type' => $request->type,
            'no' => $request->no,
            'year' => $request->year,
            'status' => $request->status,
            'price' => $request->price,
            'image' => $nama_file,
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(Cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars $cars)
    {
        if(Auth::user()->role == "admin"){

            return view('admin.car.edit',compact('cars'));
        
        }else{
            return view('costumer.transaction.add',compact('cars'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cars  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars $cars)
    {
        //
    }
}
