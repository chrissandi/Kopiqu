<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Product</th>
                                <th class="column-2"></th>
                                <th class="column-3">Price</th>
                                <th class="column-4">Quantity</th>
                                <th class="column-5">Total</th>
                            </tr>
                            <?php $shipping =0;$total=0;?>
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $item)

                                    <?php
                                    $total += $item['harga'] * $item['jumlah'];
                                    $shipping += $item['berat'] * $item['jumlah'];
                                    ?>
                                        <tr class="table_row">
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="storage/product_images/{{$item['foto']}}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2">{{$item['name']}}</td>
                                            <td class="column-3">{{$item['harga']}}</td>
                                            <td class="column-4">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m kurang" data-id="{{$item['id']}}" >
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product" id="qty" type="number" name="num-product1" value="{{$item['jumlah']}}">

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m tambah" data-id="{{$item['id']}}">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5">{{$item['harga']*$item['jumlah']}}</td>
                                        </tr>

                                @endforeach
                            @endif

                            <?php
                                $shipping = $shipping * 5000;
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Cart Totals
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Subtotal:
                                    </span>
                        </div>

                        <div class="size-209">
                                    <span class="mtext-110 cl2">
                                        {{$total}}
                                    </span>
                        </div>
                    </div>

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                                    <span class="stext-110 cl2">
                                        Shipping: {{$shipping}}
                                    </span>
                        </div>
                    </div>

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                        </div>

                        <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        <?php
                                            $total = $total + $shipping - rand(100, 999);
                                        ?>
                                        {{ $total }}
                                    </span>
                        </div>
                    </div>
                    <form method="post" action="{{route('user.store')}}">
                        @csrf
                        <input type="hidden"name="total" value="{{$total}}">
                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            <input type="submit" value="Proceed to Checkout"/>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        $(this).css('position','relative');
        $(this).css('overflow','hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function(){
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script type="text/javascript">
    $(".tambah").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $('#qty').val(parseInt($('#qty').val()) + 1);

        $.ajax({
            url: '{{ url('/cart') }}',
            method: "post",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), jumlah: 1},
            success: function (response) {
                window.location.reload();
            }
        });
    });
    $(".kurang").click(function (e) {
        e.preventDefault();

        var ele = $(this);
        $('#qty').val(parseInt($('#qty').val()) - 1);
        $.ajax({
            url: '{{ route('user.updateCart') }}',
            method: "post",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), jumlah: -1},
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "delete",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>

</body>
</html>
