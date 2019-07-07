<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\product;
use App\order;
use App\listCatPro;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminProducts()
    {
        $admin =Auth::user();
        $allProduct = DB::table('products')->where('isDeleted','=',false)->get();
        $categories = DB::table('categories')->get();
        return view("admin.pages.admin-products", compact('admin' , 'allProduct','categories'));
    }
    public function adminOrders()
    {
        $admin =Auth::user();
        $allOrders = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.idUser')

            ->orderBy('status','asc')
            ->get();
        return view ("admin.pages.admin-orders",compact('admin','allOrders'));
    }
    public function finishOrder(){
        $id =\request('idOrder');
        db::table('orders')->where('idOrder',$id)->update(['status'=>true]);
        return redirect()->back();
    }
    public function deleteProduct()
    {
        $id = \request('idProduct');
        db::table('products')->where('idProduk',$id)->update(['isDeleted'=>true]);
        return redirect()->back();
    }
    public function addProduct(){
        $namaP = \request('namaP');
        $deskripsi = \request('deskripsi');
        $stok = \request('stok');
        $harga = \request('harga');
        $berat = \request('berat');
        $kategori = \request('kategori');
        $imagePath = '';
        if(request('image')){
            $imagePath = \request('image')->store('product_images','public');
        }
        $product1 = product::create(['namaP'=>$namaP,'deskripsi'=>$deskripsi,
            'stok'=>$stok,'harga'=>$harga,'berat'=>$berat,'foto'=>$imagePath]);
        listcatpro::create(['idProduk'=>$product1->id,'idKategori'=>$kategori]);
        return redirect()->back();
    }
    public function editProduct()
    {
        $id =\request('idProduct');
        $namaP = \request('namaP');
        $deskripsi = \request('deskripsi');
        $stok = \request('stok');
        $harga = \request('harga');
        $berat = \request('berat');
        db::table('products')->where('idProduk',$id)->update(['namaP'=>$namaP,'deskripsi'=>$deskripsi,
            'stok'=>$stok,'harga'=>$harga,'berat'=>$berat]);
        return redirect()->back();
    }
}
