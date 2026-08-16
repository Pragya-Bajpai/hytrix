<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hytrix</title>
  @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

  <!-- start-our-products-area -->
         <section class="services-area-four pt-100 pb-70">
            <div class="container">
               <div class="section-title text-center">
                  <h2>Our Awesome Products</h2>
                  <p class="margin-auto">
                     Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris Morbi accumsan ipsum velit.
                  </p>
               </div>
               <div class="row justify-content-center align-items-center pt-45">
                  <div class="col-lg-3 col-md-6">
                     <div class="services-card services-card-color-bg2">
                        <a href="#!">
                        <img src="{{asset('assets/images/product/Untitled-25.jpg')}}" alt="services">
                        </a>
                        <h3><a href="#!">MLM Software Demo</a></h3>
                        <p>MLM</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="services-card services-card-color-bg2">
                        <a href="#!">
                        <img src="{{asset('assets/images/product/Untitled-24.jpg')}}" alt="services">
                        </a>
                        <h3><a href="#!">Real Estate Demo</a></h3>
                        <p>Real Estate</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="services-card services-card-color-bg2">
                        <a href="#!">
                        <img src="{{asset('assets/images/product/Untitled-21.jpg')}}" alt="services">
                        </a>
                        <h3><a href="#!">Micro Finance Demo</a></h3>
                        <p>Software Company</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="services-card services-card-color-bg2">
                       <a href="#!">
                       <img src="{{asset('assets/images/product/Untitled-22.jpg')}}" alt="services">
                       </a>
                       <h3><a href="#!">Cab Booking Demo</a></h3>
                       <p>Car Booking</p>
                    </div>
                 </div>
               </div>
            </div>
         </section>
        <!-- end-our-products-area -->
        
@endsection