<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @include('admin.categorystyle')
    <style>
       .displaytitle{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 50px;
       }

       .displaytable{
        border: 1px solid white;
        width: 80%;
        text-align: center;
        margin-left: 70px;
       }

       .titlerow{
        background-color:grey;
       }

       .postpic{
        height: 100px;
        width: 150px;
        padding: 10px;
       }

       .alert{
            margin-top: 50px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
           @include('admin.barside')
        <!-- partial -->
           <!-- partial:partials/_sidebar.html -->
                @include('admin.categorybarnavigate')
           <!-- partial -->
        <div class="content-wrapper">

            @if(session()->has('message'))

            <div class="alert alert-danger">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
            </div>

            @endif

            <h1 class="displaytitle">Client Orders</h1>

            <table class="displaytable">

                <tr class="titlerow">
                    <th>User ID</th>

                    <th>First Name</th>

                    <th>Last Name</th>

                    <th>User Email</th>

                    <th>Address</th>

                    <th>Country</th>

                    <th>Quantity</th>

                    <th>Price</th>

                    <th>Payment Status</th>

                </tr>

                @foreach ($data as $data)
                <tr>
                    <td>{{ $data->user_id }}</td>

                    <td>{{ $data->first_name }}</td>

                    <td>{{ $data->last_name }}</td>

                    <td>{{ $data->email }}</td>

                    <td>{{ $data->home_address }}</td>

                    <td>{{ $data->product_title }}</td>

                    <td>{{ $data->product_quantity }}</td>

                    <td>{{ $data->product_price }}</td>

                    <td>{{ $data->payment_status }}</td>

                </tr>
                @endforeach
            </table>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.categoryjavascript')
  </body>
</html>
