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
               <div class="text-center mb-5">
                  <h2>Portfolio</h2>
               </div>
			   
                <div class="row">
				@foreach($data as $val)
                   <div class="col-lg-4">
                      <div class="port-client-logo hvr-float-shadow">
                         <img src="{{asset($val->image)}}" class="img-fluid">
                      </div>
                   </div>
				   @endforeach
                
                </div>
            </div>
         </div>
    </section>
    
@endsection