<?php

use Illuminate\Database\Seeder;

use App\categorie;
use App\listCatPro;
use App\order;
use App\product;
use App\sale;
use App\treecategorie;
use App\uniquecode;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /**clear**/

        User::where('email','guest1@guest.com')->delete();
        User::where('email','admin1@admin.com')->delete();

        /** User **/
        $user = User::create([
            'name' => 'guest',
            'email' => 'guest1@guest.com',
            'password' => bcrypt('password')
        ]);
        $admin = User::create([
            'name' => 'admin1',
            'type' => 'admin',
            'email' => 'admin1@admin.com',
            'password' => bcrypt('password')
        ]);

        /** categories**/
        $powder = categorie::create(['name' => 'powder']);
        $beans = categorie::create(['name' => 'beans']);
        $arabica = categorie::create(['name' => 'arabica']);
        $robusta = categorie::create(['name' => 'robusta']);



        /** Product **/
        $product1 = product::create(['namaP'=>'kopi1','deskripsi'=>'kopi paling mahal di upnormal','stok'=>1000,'harga'=>10000,'berat'=>1,'foto'=>'produk1.jpg']);
        $product2 = product::create(['namaP'=>'kopi2','deskripsi'=>'kopi paling mahal di starbucks','stok'=>1000,'harga'=>100000,'berat'=>1,'foto'=>'produk2.jpg']);
        $product3 = product::create(['namaP'=>'kopi3','deskripsi'=>'kopi paling mahal di warkop','stok'=>1000,'harga'=>1000,'berat'=>1,'foto'=>'produk3.jpg']);
        $product4 = product::create(['namaP'=>'kopi4','deskripsi'=>'kopi paling mahal di rumah','stok'=>1000,'harga'=>100,'berat'=>1,'foto'=>'produk4.jpg']);

        /** Order **/
        $order1 = order::create(['idUser'=>$user->id,'idAdmin'=>$admin->id,'nominal'=>120000,'status'=>false]);
        $order2 = order::create(['idUser'=>$user->id,'idAdmin'=>$admin->id,'nominal'=>20000,'status'=>true]);

        /** Sales **/
        $sales1 = sale::create(['idOrder'=>$order1->id,'idProduk'=>$product1->id,'jumlah'=>1]);
        $sales2 = sale::create(['idOrder'=>$order1->id,'idProduk'=>$product2->id,'jumlah'=>1]);
        $sales3 = sale::create(['idOrder'=>$order2->id,'idProduk'=>$product1->id,'jumlah'=>2]);

        /** Sales **/
        $listcatpro1 = listCatPro::create(['idProduk'=>$product1->id,'idKategori'=>$powder->id]);
        $listcatpro2 = listCatPro::create(['idProduk'=>$product2->id,'idKategori'=>$beans->id]);
        $listcatpro3 = listCatPro::create(['idProduk'=>$product3->id,'idKategori'=>$arabica->id]);
        $listcatpro4 = listCatPro::create(['idProduk'=>$product4->id,'idKategori'=>$robusta->id]);
    }
}
