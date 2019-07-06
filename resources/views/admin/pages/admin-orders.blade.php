@extends('admin.layout.admin-layout')
@section('content')

    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Orders</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Pembeli</th>
                            <th>Admin</th>
                            <th>Nominal</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allOrders as $order)
                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->nominal}}</td>
                                <td>
                                    @if($order->status==0)
                                        Pending
                                    @else
                                        Complete
                                    @endif
                                </td>
                                <td>
                                    @if($order->status==0)
                                        <form action="{{route('admin.finishOrder')}}" method="post" >
                                            @csrf
                                            <input type="hidden" name="idOrder" id=""value="{{$order->idOrder}}">
                                            <button class="btn btn-primary btn-sm">Selesai</button>
                                        </form>

                                    @else
                                        No Action Needed
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>

    <!-- End of Main Content -->
@endsection
