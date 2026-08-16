<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hytrix</title>
  @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')
  
  <!-- start-form-area -->
       <div class="contact-form-area pt-50 pb-70">
           <div class="container">
		   <div class="row mb-5">
		   <div class="col-md-12 ">
				@if(session()->has('success'))
				<p class="alert alert-success ms-auto mt-3"> {{ session()->get('success') }}</p>
				@elseif (Session::has('failed'))
			   <p class="alert alert-danger ms-auto mt-3"> 
				   {{Session::get('failed')}}
			   </p>
				@endif
			  </div>
		   </div>
              <div class="section-title text-center">
                 <h2>Let's Send Us a Message Below</h2>
              </div>
              <div class="row pt-45">
			  
                 <div class="col-lg-4">
                    <div class="contact-info mr-20">
                       <span>Contact Info</span>
                       <h2>Let's Connect With Us</h2>
                       <ul>
                       <li>
                             <div class="content">
                                <i class="bx bxs-map"></i>
                                <h3>Address</h3>
								<span>D-54, Arjun Tower, Vibhuti Khand, Lucknow, Uttar Pradesh 226010
                                 </span>
                             </div>
                          </li>
					    <!--li>
                             <div class="content">
                                <i class="bx bxs-map"></i>
                                <h3>Head Office</h3>
                                <span> 8111 Presidio, Dr. Cupertino (CA) 95014 USA                            
                                 </span>
                             </div>
                          </li>
                          <li>
                             <div class="content">
                                <i class="bx bxs-map"></i>
                                <h3>Lucknow Office</h3>
								<span>D-54, Arjun Tower, Vibhuti Khand, Lucknow, Uttar Pradesh 226010
                                 </span>
                             </div>
                          </li>
						   <li>
                             <div class="content">
                                <i class="bx bxs-map"></i>
                                <h3>Gurgaon  Office</h3>
                                <span>1069, 2nd floor, RR enclave, Badshahpur, Sector-67, Gurgaon,122101
                                 </span>
                             </div>
                          </li-->
                          
				
                          <li>
                           <div class="content">
                              <i class="bx bx-phone-call"></i>
                              <h3>Phone Number</h3>
                              <!--a href="tel:+14085086250"> +1 408 508 6250 (Head Office)</a-->
							  <a href="tel:+919076500530">+919076500530 (Manager)</a>
							  <a href="tel:+919076500528">+919076500528 (Sales Team)</a>
							   <a href="tel:+919076500529">+919076500529 (Dev Team)</a>
                           </div>
                        </li>
                          <li>
                             <div class="content">
                                <i class="bx bx-message"></i>
                                <h3>Contact Info</h3>
                                <a href="mailto:info@hytrix.in">info@hytrix.in</a>
                                <a href="mailto:hytrixtech@gmail.com">hytrixtech@gmail.com</a>
                             </div>
                          </li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-8">
                    <div class="contact-form">
                       <form action="{{route('contactstore')}}" method="POST">
                       @csrf 
                          <div class="row">
                             <div class="col-lg-6">
                                <div class="form-group has-error">
                                   <label>Your Name <span>*</span></label>
                                   <input type="text" name="name" class="form-control"  placeholder="Name" value="{{old('name')}}">
								    <span class="text-danger">
								   @error('name')
								   {{$message}}
								   @enderror
								  </span>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group has-error">
                                   <label>Your Email <span>*</span></label>
                                   <input type="email" name="email" id="email" class="form-control"  placeholder="Email" value="{{old('email')}}">
								    <span class="text-danger">
								   @error('email')
								   {{$message}}
								   @enderror
								  </span>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group has-error">
                                   <label>Phone Number <span>*</span></label>
                                   <input type="text" name="phone_number" id="phone_number"  class="form-control" placeholder="Phone Number" value="{{old('phone_number')}}">
								    <span class="text-danger">
								   @error('phone_number')
								   {{$message}}
								   @enderror
								  </span>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group has-error">
                                   <label>Your Subject <span>*</span></label>
                                   <input type="text" name="msg_subject" id="msg_subject" class="form-control"  placeholder="Your Subject" value="{{old('msg_subject')}}">
								    <span class="text-danger">
								   @error('msg_subject')
								   {{$message}}
								   @enderror
								  </span>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12">
                                <div class="form-group has-error">
                                   <label>Your Message <span>*</span></label>
                                   <textarea name="message" class="form-control" id="message" cols="30" rows="8"  placeholder="Your Message" value="" >{{old('message')}}</textarea>
								    <span class="text-danger">
								   @error('message')
								   {{$message}}
								   @enderror
								  </span>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12">
                                <div class="agree-label">
                                   <input type="checkbox" id="chb1" name="check">
                                   <label for="chb1">
                                   Accept <a href="{{route('term.condition')}}">Terms &amp; Conditions</a> And <a href="{{route('term.condition')}}">Privacy Policy.</a>
                                   </label>
								    <span class="text-danger">
								   @error('check')
								   {{$message}}
								   @enderror
								  </span>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn btn-bg-two border-radius-50 disabled" style="pointer-events: all; cursor: pointer;">
                                Send Message <i class="bx bx-chevron-right"></i>
                                </button>
								 
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- end-form-area -->


     <!-- start-map-area -->
     <div class="map-area">
        <div class="container-fluid m-0 p-0">
    <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14237.134743360148!2d80.97892165541994!3d26.86272660000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be3ad67cf86c1%3A0xe090e6813b2b28b9!2sAfluex%20Multiservices%20LLP%20-%20Software%20Development%20Company%20%26%20advertising-agency!5e0!3m2!1sen!2sin!4v1692341468380!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe-->
       
        </div>
     </div>
     <!-- end-map-area -->
     
	 
	 
@endsection