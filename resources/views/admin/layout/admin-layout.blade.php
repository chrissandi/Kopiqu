<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Custom fonts for this template-->
    <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @if(\Route::current()->getName() == 'admin.products' or  \Route::current()->getName() == 'admin.orders')
        <link rel="stylesheet" href="{{asset('/vendor/datatables/dataTables.bootstrap4.min.css')}}">
    @endif

 <title>Admin</title>
{{--    <title>Admin</title>--}}
</head>
<body id="page-top">
<div id="wrapper">
    @include('admin.snipset.admin-sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
    <div class="content">
        @include('admin.snipset.admin-topbar')
        @yield('content')
    </div>
    </div>
    @include('admin.snipset.admin-footer')
</div>

<script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('/js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('/vendor/chart.js/Chart.min.js')}}"></script>
@if(\Route::current()->getName() == 'admin.products')
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready( function () {

            $('#dataTable').DataTable();
        } );
        $(function () {
            $(".deleteModal").click(function () {
                var my_id_value = $(this).data('id');
                $(".modal-body #hiddenValue").val(my_id_value);
            })
        });
        $(function () {
            $(".editModal").click(function () {
                var my_id_value = $(this).data('product');
                var name = $(this).data('nama');
                var desk = $(this).data('desk');
                var stok= $(this).data('stok');
                var harga = $(this).data('harga');
                var berat = $(this).data('berat');
                $(".modal-body #hiddenValue").val(my_id_value);
                $(".modal-body #hiddenName").val(name);
                $(".modal-body #hiddenDesk").val(desk);
                $(".modal-body #hiddenStok").val(stok);
                $(".modal-body #hiddenHarga").val(harga);
                $(".modal-body #hiddenBerat").val(berat);
            })
        });
    </script>

@endif


</body>
</html>
