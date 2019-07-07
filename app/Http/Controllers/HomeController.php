<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newProduct = DB::table('products')->where('isDeleted','=',false)
            ->orderBy('created_at','desc')->take(3)->get();
        $allProduct = DB::table('products')
            ->join('list_cat_pros','list_cat_pros.idProduk','=','products.idProduk')
            ->where('isDeleted','=',false)
            ->join('categories','categories.idKategori','=','list_cat_pros.idKategori')->get();
        $allCategories = categorie::all();
        return view('index', compact('newProduct','allProduct','allCategories'));
    }
}
