<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
     <!-- partial:partials/_sidebar.html -->
        @include('admin.barside')
     <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
             @include('admin.barnavigate')
        <!-- partial -->
        @include('admin.mainbody')
    <!-- container-scroller -->
    @include('admin.javascript')
  </body>
</html>
