<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;
use Cart;
class BillController extends Controller
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


    public function changeQty(Request $request)
    {
        //
        $rowId = null;
        foreach(Cart::content() as $item)
        {
            if ($item->id == $request->idItem)
            {
                $rowId = $item->rowId;
                break;
            }

        }

        Cart::update($rowId, $request->Qty);

        return response()->json(['id'=>$rowId,'qty'=>$request->Qty]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Delete(Request $request)
    {
        $rowId = null;
        foreach(Cart::content() as $item)
        {
            if ($item->id == $request->idItem)
            {
                $rowId = $item->rowId;
                break;
            }

        }

        Cart::remove($rowId);

        return view('checkout.checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePrice(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
