<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    @include('admin.categorystyle')
    <style>
         .visacat{
                padding-left: 320px
        }

        .center{
                margin: auto;
                width: 80%;
                text-align: center;
                margin-top: 30px;
                border: 3px solid whitesmoke;
        }

        .visatypepic{
            width: 150px;
            height: 150px;
        }

        .tbhd{
            background: gray;
        }

        .tbhdelements{
            padding: 20px;
        }

    </style>

</head>
<body>
  <div class="container-scroller">
   <!-- partial:partials/_sidebar.html -->
      @include('admin.barside')
      <div class="main-panel">
          <div class="content-wrapper">

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

            <table class="center">
                <tr class="tbhd">
                    <td class="tbhdelements">Country Name</td>
                    <td class="tbhdelements">Description</td>
                    <td class="tbhdelements">Quantity</td>
                    <td class="tbhdelements">Visa Category</td>
                    <td class="tbhdelements">Visa Fee</td>
                    <td class="tbhdelements">Visa Image</td>
                    <td class="tbhdelements">Delete</td>
                    <td class="tbhdelements">Edit</td>
                </tr>

                @foreach ($data as $data)


                    <tr>
                        <td>{{ $data->Title }}</td>
                        <td>{{ $data->Description }}</td>
                        <td>{{ $data->Quantity }}</td>
                        <td>{{ $data->Category }}</td>
                        <td>{{ $data->Price }}</td>
                        <td>
                            <img class="visatypepic" src="/visatypepic/{{ $data->Image }}" alt="">
                        </td>
                        <td><a onclick="return confirm('Are you sure you want to delete this product???')" class="btn btn-danger" href="{{ url('delete_product', $data->id) }}">Delete</a></td>
                        <td><a onclick="return confirm('Are you sure you want to delete this category')" class="btn btn-success" href="{{ url('edit_product', $data->id) }}">Edit</a></td>
                    </tr>
                    @endforeach
             </table>
            </div>
        </div>
     @include('admin.categoryjavascript')
    </body>
</html>
