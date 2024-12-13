@extends('layouts.primarylayout')
@push('mystyle')
<style>
    .cart_div{
        margin: auto;
        width: 50%;
        text-align: center;
        padding: 20px;
    }

    table, th, td{
        border: 4px solid  rgb(28, 64, 97);
    }

    th{
        font-size: 25px;
        padding: 7px;
        background-color: rgb(28, 64, 97);
        color: #000;
    }

    .ttlprice{
        font-size: 25px;
        padding: 30px;
        color: rgb(47, 144, 234);
        font-weight: 600;
    }
</style>
@endpush
@section('content')
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

       <!-- Navbar & Hero Start -->
       <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Cart</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Student Visa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Cart Start -->
    <div class="cart_div">

        <table>
            <tr>
                <th>Country Name</th>
                <th>Number of Visas</th>
                <th>Visa Fee</th>
                <th>Action</th>
            </tr>

            <?php $totalprice=0; ?>

            @foreach ($post as $cart)

            <tr>
                <td>{{ $cart->product_title }}</td>
                <td>{{ $cart->product_quantity }}</td>
                <td>{{ $cart->product_price}}</td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you syre you want to remove this visa???')" href="{{ url('remove_visa', $cart->id) }}">REMOVE VISA</a></td>
            </tr>

            <?php $totalprice=$totalprice + $cart->product_price; ?>

            @endforeach
        </table>

        <div>

            <h1 class="ttlprice">Total Price : {{ $totalprice }}</h1>

        </div>

        <div>

            <h1 style="font-size: 25px; padding-bottom: 20px;">Proceed to Order</h1>

            <a href="{{ url('order') }}" class="btn btn-danger">Card Payment</a>

        </div>
    </div>
    <!-- Cart End -->

 <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
