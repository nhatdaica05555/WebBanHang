<?php

namespace App\Http\Controllers;

use App\Bill_detail;
use Cart;
use Illuminate\Http\Request;
use App\Customer;

class BillDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        return view('checkout.checkout');
    }
    public function UploadBill(Request $request)
    {
        //Add to table  customer  dua vao id_customer

     $cus = new Customer;

     $cus->name = $request->name;
     $cus->email = $request->email;
     $cus->address = $request->address;
     $cus->phone = $request->phone;
     $cus->note = $request->note;
     $cus->save();
        return redirect('home')->with('thongbao',"Success!");
        //add to table  bills -> id_bill -> compare with 'id_bill' in 'bill_detail' , 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bill_detail  $bill_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Bill_detail $bill_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bill_detail  $bill_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill_detail $bill_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bill_detail  $bill_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill_detail $bill_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bill_detail  $bill_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill_detail $bill_detail)
    {
        //
    }
}
