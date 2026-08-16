<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hytrix</title>
  @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')

 <section class="portfolio-bg">
         <div class="contact-form-area ptb-70">
            <div class="container">
               <div class="text-center mb-3">
                  <h2>Why Join Us..?</h2>
               </div>
                <div>
                  Join us in contributing to solutions that matter. From revolutionizing industries to creating social change, your work will have a purpose, making a tangible difference in the world. When you're part of Hytrix, you're part of a team that isn't afraid to push boundaries. We thrive on challenges, and together, we pave the way for a future that's brighter, bolder, and and brimming with potential.
				  Ready to make your mark? Join us to be a part of a journey that's transforming the world. Together, we're crafting a future that's limited only by our imaginations. Are you in?
                </div>
            </div>
         </div>
    </section>
    <section class="">
         <div class="contact-form-area ptb-70">
            <div class="container">
                <div class="row">
				
                  @foreach($data as $careers)
                   <div class="col-lg-4 col-md-6">
                      <div class="single-services-box carrer-head">
                         <div class="icon care" style="width:100px!important;height:100px!important;">
						 <img src="{{ asset('public/'.$careers->file) }}" class="img-fluid w-100 h-100">
                     <!--      <i class="flaticon-computer"></i>-->
                         </div>
                         <h3>
                            {{$careers->title}}
                         </h3>
                         <div>
						 {!! $careers->description !!}
						 </div>
                         <a href="{{url('application')}}">
                         <button class="button-33" role="button">Apply Now</button>
                         </a>
                      </div>
                   </div> 
                  @endforeach                  
                </div>
            </div>
         </div>
    </section>
    
@endsection