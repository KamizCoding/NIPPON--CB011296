<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.style')
  <style>
    /* Responsive button styles */
    .custom-btn {
      width: 200px; /* Adjusted width for better responsiveness on smaller screens */
      height: 60px; /* Adjusted height for better proportion */
      color: #fff;
      border-radius: 5px;
      padding: 10px 20px; /* Adjusted padding for better text fit */
      font-family: 'Lato', sans-serif;
      font-size: 16px; /* Adjusted font size for better readability */
      font-weight: bold;
      background: transparent;
      cursor: pointer;
      transition: all 0.3s ease;
      display: block; /* Keep buttons stacked vertically */
      box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5), 4px 4px 5px 0px rgba(0,0,0,.1);
      outline: none;
      margin: 15px 10px; /* Adjust margins for spacing between buttons */
      text-align: center;
    }

    /* Container for buttons in a row */
    .buttons {
      display: flex; /* Flexbox for horizontal arrangement */
      justify-content: space-between; /* Distribute buttons evenly */
      margin-top: 20px; /* Add margin-top for 20px distance from top */
    }

    /* Button 1 style */
    .btn-1 {
      background: rgb(6,14,131);
      background: linear-gradient(0deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);
      border: none;
    }

    .btn-1:hover {
      background: rgb(0,3,255);
      background: linear-gradient(0deg, rgb(0, 17, 255) 0%, rgba(2,126,251,1) 100%);
    }
  </style>
</head>
<body>
  <div class="main-panel">
    <div class="buttons">  <a href="{{ url('visa_category') }}" class="custom-btn btn-1">Visa Category</a>
      <a href="{{ url('show_clients') }}" class="custom-btn btn-1">Clients</a>
      <a href="{{ url('add_new_product') }}" class="custom-btn btn-1">New Product</a>
      <a href="{{ url('display_product') }}" class="custom-btn btn-1">Products</a>
      <a href="{{ url('orderdetails') }}" class="custom-btn btn-1">Orders</a>
    </div>
  </div>
  @include('admin.javascript')
</body>
</html>
