<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    @include('admin.categorystyle')
    <style>
        .centerdiv{
            text-align: center;
            padding-top: 60px;
        }

        .fonthead{
            font-size: 50px;
            padding-bottom: 60px
        }

        .form {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 20px;
            background: linear-gradient(to bottom, #0077be, #3b8df2);
            border-radius: 10px;
            overflow: hidden;
            perspective: 1000px;
            transform-style: preserve-3d;
            transform: rotateX(-10deg);
            transition: all 0.3s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            animation: form-animation 0.5s ease-in-out;
            width: 500px;
        }

        @keyframes form-animation {
            from {
                transform: rotateX(-30deg);
                opacity: 0;
            }

            to {
                transform: rotateX(0deg);
                opacity: 1;
            }
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .input {
            padding: 10px;
            border-radius: 5px;
            background-color: transparent;
            transition: border-color 0.3s ease-in-out, background-color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            transform-style: preserve-3d;
            backface-visibility: hidden;
            color: rgb(106, 18, 248);
            font-weight: 900;
            border: 2px solid #3b8df2;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .input::placeholder {
            color: #868585;
        }

        .input:hover,
        .input:focus {
            border-color: #3b8df2;
            background-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.05) rotateY(20deg);
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
            outline: none;
        }

        .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            cursor: pointer;
        }

        #closeButton {
            display: none;
        }

        #closeButton:checked + .close {
            display: none;
        }

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
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session('message'))
                <div class="alert alert-success">
                    <input type="checkbox" id="closeButton">
                    <label for="closeButton" class="close">&times;</label>
                    {{ session('message') }}
                </div>
             @endif

             @if(session('delmessage'))
             <div class="alert alert-success">
                 <input type="checkbox" id="closeButton">
                 <label for="closeButton" class="close">&times;</label>
                 {{ session('delmessage') }}
             </div>
          @endif

                <div class="centerdiv">
                    <h2 class="fonthead">Add New Visa Category</h2>
                </div>
                <div class="visacat">
                    <form class="form" action="{{ url('add_visa_category') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Visa_Category_Name">Visa Category Name:</label>
                            <input class="input" type="text" name="Visa_Category_Name" placeholder="Enter Visa Category Name">
                        </div>
                        <div class="form-group">
                            <label for="Validity_Period">Validity Period (Days):</label>
                            <input class="input" type="number" name="Validity_Period" placeholder="Enter Validity Period">
                        </div>
                        <div class="form-group">
                            <label for="Max_Length_of_Stay">Max Length of Stay (Days):</label>
                            <input class="input" type="number" name="Max_Length_of_Stay" placeholder="Enter Max Length of Stay">
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>

                <table class="center">
                    <tr>
                        <td>Visa Category Name</td>
                        <td>Validity Period in Days</td>
                        <td>Max Length of Stay in Days</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($data as $data)


                    <tr>
                        <td>{{ $data->Visa_Category_Name }}</td>
                        <td>{{ $data->Validity_Period_in_Days }}</td>
                        <td>{{ $data->Max_Length_of_Stay_in_Days }}</td>
                        <td><a onclick="return confirm('Are you sure you want to delete this category')" class="btn btn-danger" href="{{ url('delete_visa_category', $data->id) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    <!-- container-scroller -->
    @include('admin.categoryjavascript')
  </body>
</html>
