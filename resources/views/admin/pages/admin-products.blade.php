@extends('admin.layout.admin-layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-xs-10">
                <h1 class="h3 mb-2 text-gray-800">Products</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-2">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                   add Product
                </button>
            </div>
        </div>
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Berat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allProduct as $item)
                            <tr>
                                <td>{{$item->namaP}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->stok}}</td>
                                <td>{{$item->harga}}</td>
                                <td>{{$item->berat}}</td>
                                <td>{{$item->foto}}</td>
                                <td>
                                    <a data-target="#deleteProductModal" data-toggle="modal" class=" btn btn-danger btn-sm deleteModal text-white" data-id="{{$item->idProduk}}">Delete</a>
                                    <a data-target="#editProductModal" data-toggle="modal" class=" btn btn-info btn-sm editModal text-white"
                                       data-stok = "{{$item->stok}}" data-desk ="{{$item->deskripsi}}"data-harga="{{$item->harga}}"
                                       data-nama ="{{$item->namaP}}" data-berat="{{$item->berat}}"data-product="{{$item->idProduk}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Share To instagram</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success btn-md" value="Add Product" />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Confirmation Page</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this product?
                    <form action="{{route('admin.deleteProduct')}}" method="post">
                        @csrf
                        <input type="hidden" name="idProduct" id="hiddenValue"  value=""/>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary btn-sm" value="Yes">
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Page</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.editProduct')}}" method="post">
                        @csrf
                        <input type="hidden" name="idProduct" id="hiddenValue"  value=""/>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" name="namaP" id="hiddenName" class="form-control" placeholder="Ubah nama produk ..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <input type="text" name="deskripsi" id="hiddenDesk" class="form-control" placeholder="Ubah deskripsi produk ..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-8">
                                <input type="number" name="stok" id="hiddenStok"class="form-control" placeholder="Masukan jumlah stok tersedia">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="number" name="harga" id="hiddenHarga"class="form-control" placeholder="Masukan harga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Berat</label>
                            <div class="col-sm-8">
                                <input type="number" name="berat" id="hiddenBerat"class="form-control" placeholder="Masukan berat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-8">
                                <input type="file">
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary btn-sm" value="Yes">

                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.addProduct')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="idProduct" id="hiddenValue"  value=""/>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" name="namaP" id="hiddenName" class="form-control" placeholder="Ubah nama produk ..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <input type="text" name="deskripsi" id="hiddenDesk" class="form-control" placeholder="Ubah deskripsi produk ..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-8">
                                <input type="number" name="stok" id="hiddenStok"class="form-control" placeholder="Masukan jumlah stok tersedia">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="number" name="harga" id="hiddenHarga"class="form-control" placeholder="Masukan harga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Berat</label>
                            <div class="col-sm-8">
                                <input type="number" name="berat" id="hiddenBerat"class="form-control" placeholder="Masukan berat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-8">
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div class="custom-select" style="width:200px;">
                            <select name="kategori">
                                @foreach($categories as $cat)
                                <option value="{{$cat->idKategori}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary btn-sm" value="Yes">

                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

                </div>
                </form>

                </div>
            </div>
        </div>
    </div>
@endsection
