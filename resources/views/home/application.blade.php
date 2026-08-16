<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hytrix</title>
  @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')
 
  <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center" >
									@if(session()->has('success'))
									<p class="alert alert-success w-75 mt-3"> {{ session()->get('success') }}</p>
									@endif
                </div>
				<div class="col-lg-2">
                </div>
								
                <div class="col-lg-8" id="main-career">
									
                    <form class="row g-3" action="{{route('appstore')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="col-md-12 mb-3">
                          <div class="text-center">
                              <h3>Job Application <span class="red">Form</span></h3>
                              <p>
                                  Hi there! This form records the entry for your Job Application for various profiles at maxus. Go ahead and fill in the form with complete and accurate details that are best to your knowledge!
                              </p>
                              <p>
                                  In case of any query or assistance, reach us out at <br>
                                  <a href="mailto:info@hytrix.in">info@hytrix.in</a> OR Call us Tel: +91 8283853996
                              </p>
                          </div>
                      </div>
                    <div class="col-md-6 mb-3">
                      <label for="inputEmail4" class="form-label">First Name*</label>
                      <input type="text" class="form-control" required="" id="inputEmail4" placeholder="First Name" name="fname" value="{{old('fname')}}">
					  <span class="text-danger">
								   @error('fname')
								   {{$message}}
								   @enderror
					</span>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="inputPassword4" class="form-label">Last Name</label>
                      <input type="text" required="" class="form-control" id="inputPassword4" placeholder="Last Name" name="lname"  value="{{old('lname')}}">
					<span class="text-danger">
								   @error('lname')
								   {{$message}}
								   @enderror
					</span>
				  </div>
                    <div class="col-md-6 mb-3">
                      <label for="inputEmail4" class="form-label">Email*</label>
                      <input type="email" required="" class="form-control" id="inputEmail4" placeholder="Enter Your Valid Email Address" name="email" value="{{old('email')}}">
                    <span class="text-danger">
								   @error('email')
								   {{$message}}
								   @enderror
					</span>
					</div>
                    <div class="col-md-6 mb-3">
                      <label for="inputPassword4" class="form-label">Mobile No*</label>
                      <input type="number" required="" class="form-control" id="inputPassword4" placeholder="Mobile No" name="mobile" value="{{old('mobile')}}">
						<span class="text-danger">
								   @error('mobile')
								   {{$message}}
								   @enderror
					</span>                   
				   </div>
                    <div class="col-6 mb-3">
                      <label for="inputAddress" class="form-label">Attachment Your CV*</label>
                      <input type="file" class="form-control" id="inputAddress" placeholder="Enter Text" name="file" value="{{old('file')}}">
					  <span class="text-danger">
								   @error('file')
								   {{$message}}
								   @enderror
					</span>  
                    </div>
                    <div class="col-12 mb-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                         <a href="{{route('term.condition')}}">Accept Terms And Conditions</a> 
                        </label>
                      </div>
                    </div>
                    <div class="col-12 mb-3 mt-3">
                      <div class="hire-deve-sum text-center">
                           <button type="submit" class="default-btn btn-bg-two border-radius-50 disabled" style="pointer-events: all; cursor: pointer;">
                                Submit Application<i class="bx bx-chevron-right"></i>
                                </button>
                        </div>
                    </div>
                </form>
            </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
    </section>
    
@endsection