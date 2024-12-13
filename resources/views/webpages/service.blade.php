@extends('layouts.primarylayout')
@push('mystyle')
<style>
.servcontainer{
    margin-left: -300px;
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

    <!-- Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Services</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="servcontainer">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4 justify-content-center"> <!-- Center the row -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s" style="padding-left: 10px;"> <!-- Adjust padding here -->
                    <a href="/student" style="text-decoration: none; color: inherit;">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img src="img/studentvisaimg.jpg" alt="" class="stvisaimg">
                                <h5>Student Visa</h5>
                                <p>
                                    Offering comprehensive support for individuals seeking to pursue higher education abroad, providing all the necessary assistance and resources for applying to international universities and colleges.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="/business" style="text-decoration: none; color: inherit;">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img src="img/businessvisaimg.jpg" alt="" class="bsnsvisaimg">
                                <h5>Business Visa</h5>
                                <p>
                                    Supporting with the visa procedures for individuals traveling for various business purposes such as meetings, purchases, trade events, training, conferences, and visits to corporate branches.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="/tourist" style="text-decoration: none; color: inherit;">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <img src="img/trstvisaimg.jpg" alt="" class="trstvisaimg">
                                <h5>Tourist Visa</h5>
                                <p>
                                    Providing support in the comprehensive visa application process for individuals seeking to travel for tourism, encompassing various recreational activities, cultural exploration, and leisure experiences.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Umar Akram</h5>
                    <p>United Kingdom</p>
                    <p class="mb-0">I consulted Nippon Union for my higher studies after completing my Advanced Level Examinations followed by a foundation course and all I can say is that their resources helped me easily choose my pathway, university and which country would suit me best. It was an organized, smooth service from the beginning to the end and they were always here for me throughout the process until I received the visa. I don’t think I can recommend anyone better than Nippon Union for students who want to pursue their higher studies abroad.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Thilini</h5>
                    <p>Australia</p>
                    <p class="mt-2 mb-0">Mrs. Riyasa was easy to work with and guided me step by step for my student visa. She was reliable, responsive, and very clear throughout the whole process and I got my visa granted within record time and also, the whole application process was affordable and stress free. She also helped me to find a proper Australian Institute which even helped me to find a job end of the degree. Today I’m in the right path for a PR and I will always appreciate Mrs. Riyasa and her team for making my dreams come through!!<p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Huzni Mubarak</h5>
                    <p>Japan</p>
                    <p class="mt-2 mb-0">I didn’t even know where to start when it came to applying for my student visa application but I had to find some way to do so because Japan is one place, I’ve dreamt of studying about cars and how they are assembled from when I was a teenager. Luckily, I came across Nippon Union from where I completed a basic Japanese Language Course in and I wish I had known about it earlier because the services they provide and how they provide them is the definition of splendid customer service and enviable customer satisfaction.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Razman Ramzan</h5>
                    <p>New Zealand</p>
                    <p class="mt-2 mb-0">Without a doubt, my experience with Nippon Union was great and I was indeed very satisfied with the services they provided for me to successfully acquire a chance to complete a hospitality management course in New Zealand. I highly appreciate how they guided me throughout the whole application process and the amount of time they spent with me in order to convert my dream into a reality. For anyone looking to complete their higher studies in some place other than our motherland, I think it’s best you contact Nippon Union without any ado. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
