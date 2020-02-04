<?php

namespace App\Http\Controllers;

use App\Transaction;
use Mail;
use Auth;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        if(Auth::user()->role == "admin"){
            $transactions = Transaction::all();
            return view('costumer.transaction.index',compact('transactions'));
        }else{
            $transaction = Transaction::where('user_id',$user)->get();
            return view('costumer.transaction.index',compact('transaction')); 
        }
        
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
         try{
            Mail::send('Admin.mail.index', array('nama' => $request->name,
                                                'email' => $request->email,
                                                'harga' => $request->price,
                                                'lama' => $request->qty,
                                                'tgl' => $request->rent_date,
                                                'mobil' => $request->cars_name,
                                                'total' => $request->totall) , function($nama) use($request){
                $nama->to($request->email,'Verifikasi')->subject('JB Rent Report');
                $nama->from(env('MAIL_USERNAME','170613025@fellow.lpkia.ac.id'),'Pemberitahuan Rental');
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }

        $trans = new Transaction;
        $trans->user_Id = $request->user_id;
        $trans->car_id = $request->car_id;
        $trans->name_user = $request->name;
        $trans->qty = $request->qty;
        $trans->price = $request->price;
        $trans->rent_date = $request->rent_date;
        $trans->rent_expired = $request->rent_expired;
        $trans->email = $request->email;
        $trans->total = $request->totall;
        $trans->status = $request->status;
        $trans->car_name = $request->cars_name;
        $trans->save();

        return redirect('/transaction');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
