<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return $cart->line_items;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carts $carts)
    {
        //
    }

    public function total_cart($id)
    {

        $total_price = 0;
        foreach (Cart::find($id)->line_items as $key => $value) {
            $total_price = $total_price + $value->product->price_amount;
        }
        // dd();
        return $total_price;        
        // return $id;
    }


}
