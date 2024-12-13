@extends('layouts.primarylayout')
@push('mystyle')
<style>
        .visatypepic{
            width: 200px;
            height: 200px;
            margin-left: 100px;
        }

        .desc{
            text-align: justify;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
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

       <!--Hero Start -->
       <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Your Visa</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Your Visa Visa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Product Start -->
    <div class="row g-4 justify-content-center">

        @foreach ($post as $index => $product)
          @if ($index % 2 === 0)  <div class="row g-4 justify-content-center">
          @endif

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="package-item">
              <h2>{{ $product->Title }}</h2>
              <h3>{{ $product->Category }}</h3>
              <div class="overflow-hidden">
                <img class="visatypepic" src="visatypepic/{{ $product->Image }}" alt="">
              </div>
              <div class="text-center p-4">
                <h3 class="mb-0">LKR{{ $product->Price}}</h3>
                <p class="desc">{{ $product->Description}}</p>
                <div class="d-flex justify-content-center mb-2">
                  <a href="{{ url('read_more', $product->id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                  <form action="{{ url('book_now', $product->id) }}" method="POST">

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

          @if (($index + 1) % 2 === 0 || $loop->last)  </div>
          @endif
        @endforeach
      </div>
    <!-- Product End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
