<!DOCTYPE html>
<html lang="en">
  <head>
<base href="/public">
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
            background-color: white;
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

        .visatypepic{
            width: 175px;
            height: 175px;
            margin: auto;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">

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

                <div class="centerdiv">
                    <h2 class="fonthead">Edit the Product</h2>
                </div>
                <div class="visacat">
                    <form class="form" action="{{ url('edit_product_details', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="Country_Name">Country Name :</label>
                            <input class="input" type="text" name="Country_Name" placeholder="Enter Country Name" required value="{{ $data->Title }}">
                        </div>
                        <div class="form-group">
                            <label for="Visa_Description">Visa Description :</label>
                            <input class="input" type="text" name="Visa_Description" placeholder="Enter Visa Description" required value="{{ $data->Description }}">
                        </div>
                        <div class="form-group">
                            <label for="Visa_Fee">Visa Fee :</label>
                            <input class="input" type="number" name="Visa_Fee" placeholder="Enter The Visa Fee" required value="{{ $data->Price }}">
                        </div>
                        <div class="form-group">
                            <label for="Visa_Quantity">Visa Quantity :</label>
                            <input class="input" type="number" min="0" name="Visa_Quantity" placeholder="Enter Visa Quantity" required value="{{ $data->Quantity }}">
                        </div>
                        <div class="form-group">
                            <label for="Visa_Category">Visa Category :</label>
                            <select class="input" name="Visa_Category" required>
                                <option value="{{ $data->Category }}" selected>{{ $data->Category }}</option>
                                @foreach ($post as $category)
                                <option value="{{ $category->Visa_Category_Name }}">{{ $category->Visa_Category_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Visa_Image">Present Visa Image :</label>
                            <img class="visatypepic" src="/visatypepic/{{ $data->Image }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="Visa_Image">Visa Image :</label>
                            <input class="input" type="file"  name="Visa_Image" value="{{ $data->Image }}">
                        </div>
                        <input type="submit" value="Edit Product" class="btn btn-secondary">
                    </form>
                </div>
            </div>
        </div>
    <!-- container-scroller -->
    @include('admin.categoryjavascript')
  </body>
</html>
