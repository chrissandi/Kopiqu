<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
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
        $cart = session()->get('cart');
        db::table('orders')->insert(['idUser'=>auth()->user()->id,'nominal'=>$request->total]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
    public function addToCart(Request $request)
    {
        $id = $request->id;
        $product = product::where('idProduk',$id)->first();

        if(!$product) {
            session()->flash('error', 'Product failed to add to cart');
            return;
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $id => [
                    "id" => $id,
                    "name" => $product->namaP,
                    "jumlah" => 1,
                    "harga" => $product->harga,
                    "foto" => $product->foto,
                    "berat" => $product->berat
                ]
            ];
        }
        // if cart not empty then check if this product exist then increment quantity
        else if(isset($cart[$id])) {
            $cart[$id]['jumlah'] += 1;
        }
        // if item not exist in cart then add to cart with quantity = 1
        else {
            $cart[$id] = [
                "id" => $id,
                "name" => $product->namaP,
                "jumlah" => 1,
                "harga" => $product->harga,
                "foto" => $product->foto,
                "berat" => $product->berat
            ];
        }

        session()->put('cart', $cart);
        session()->flash('success', 'Product added to cart');
        return redirect()->back();
    }
    public function update(Request $request)
    {
        if($request->id and $request->jumlah)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["jumlah"] = $cart[$request->id]["jumlah"]+$request->jumlah;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
