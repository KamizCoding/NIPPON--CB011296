@extends('layouts.primarylayout')
@push('mystyle')
<style>

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

    <!--Hero Start -->
       <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Visa Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Visa Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->

    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin: auto; width=50%; padding=30px;">
        <div class="package-item">
          <h2>{{ $post->Title }}</h2>
          <h3>{{ $post->Category }}</h3>
          <div class="overflow-hidden">
            <img class="visatypepic" src="visatypepic/{{ $post->Image }}" alt="">
          </div>
          <div class="text-center p-4">
            <p style="text-align: justify">{{ $post->Description}}</p>
            <div class="d-flex justify-content-center mb-2">
                <form action="{{ url('book_now', $post->id) }}" method="POST">

                    @csrf

                        <div>

                            <div>

                                <input type="number" name="Quantity" value="1" min="1" style="width: 100px;">

                            </div>

                            <div>

                                <input class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0; background-color:rgb(134, 184, 23);" type="submit" value="Book Now">

                            </div>

                        </div>

                      </form>
            </div>
          </div>
        </div>
      </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
