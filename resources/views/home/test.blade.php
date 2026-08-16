<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hytrix</title>
  @include('home.layout.head')
</head>

@extends('home.layout.main')

@section('content')
  
      <!-- start-about-area -->
    <div class="about-area ptb-100">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-lg-6">
               <form action="{{route('ckeditorstore')}}" id="submitform" method="post" enctype="multipart/form-data">
			   @csrf
                    <textarea name="des" id="editor" cols="30" rows="10"></textarea>
                    <input type="submit" value="submit">
                </form>
				<img src="{{asset('images/1686126839-slider-logo1_1691904337.png')}}" alt="Girl in a jacket" width="100" height="100">

              </div>
            
           </div>
        </div>
     </div>
	  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
                <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

                <script>
                     CKEDITOR.replace('editor',{
                        filebrowserUploadUrl:"{{route('ckeditor.upload',['_token' => csrf_token() ])}}",
                         filebrowserUploadMethod :"form"
                     });
                      
          
                </script>
     <div class="choose-area pt-100 pb-70">
        <div class="container">
           <div class="row">
              <div class="col-lg-6">
                 <div class="choose-content mr-20">
                    <div class="section-title">
                       <span class="sp-color1">Why Choose Us</span>
                       <h2>What we are?</h2>
                       <p>
                          Maxus IT Services assists the software development companies in India with development service
                          and translates their product vision and technology leadership into functionality and features that bring value to 
                          end customers. Put simply, if you want a partner who cares about your business choose <b>Maxus IT Services</b>.


                       </p>
                    </div>
                    <div class="row">
                       <div class="col-lg-6 col-6">
                          <div class="choose-content-card">
                             <div class="content">
                                <i class="flaticon-practice"></i>
                                <h3>Experience</h3>
                             </div>
                             <p>Experience of developing customized, fully integrated systems for leading firms of industry.</p>
                          </div>
                       </div>
                       <div class="col-lg-6 col-6">
                          <div class="choose-content-card">
                             <div class="content">
                                <i class="flaticon-help"></i>
                                <h3>Quick Support</h3>
                             </div>
                             <p>Call,Chat Remote Shadow - We do it all.Statistically 70-90% off all issues can be handle remotely.</p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="choose-img">
                    <img src="assets/images/choose-img.jpg" alt="Images">
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div class="security-area pt-100 pb-70">
        <div class="container">
           <div class="section-title text-center">
              <h2>What we do?</h2>
           </div>
           <div class="row pt-45">
             <div class="col-lg-4 col-sm-6">
                  <div class="security-card web-height">
                     <i class="flaticon-computer"></i>
                     <h3><a href="#!">E-Commerce website</a></h3>
                     <p>
                        If you’re thinking of starting an online shop you need a powerful ecommerce system that is easy to use and has every feature you will ever need. Our solution has taken..
                     </p>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="security-card web-height">
                     <i class="flaticon-effective"></i>
                     <h3><a href="#!">CMS Managment</a></h3>
                     <p>Five online specializes in customizing open source CMSs like joomla!, mambo, oscommerce, creloded, phpbpp, wordpress, OSDate, Gallery 2, dolphin, IPB and Vbulletin..</p>
                  </div>
               </div>
                    <div class="col-lg-4 col-sm-6">
                  <div class="security-card web-height">
                     <i class="flaticon-consultant"></i>
                     <h3><a href="#!">Mobile Development</a></h3>
                     <p>We have been playing an important role in the world of Android Mobile App Development Industry to provide the
                     customized solutions to the clients on their special project demands. 
                  
                         </p>
                  </div>
               </div>
                   <div class="col-lg-4 col-sm-6">
                  <div class="security-card web-height">
                     <i class="flaticon-cyber-security"></i>
                     <h3><a href="#!">Blockchain</a></h3>
                     <p>
                       We design, build and market Blockchain products and services for businesses across the globe. 
                       We’ve not got all the answers. Yet. But Blockchain’s future is being decided right now and you’re in good company at Sequence.


                     </p>
                  </div>
               </div>
           
               
               <div class="col-lg-4 col-sm-6">
                  <div class="security-card web-height">
                     <i class="flaticon-implement"></i>
                     <h3><a href="#!">Software Development</a></h3>
                     <p>
                       Software development is the process of documentation,
                     computer programming, testing and bug fixing involved in creating and maintaining frameworks and applications involved in a software product development.  
                     </p>
                  </div>
               </div>



             <div class="col-lg-4 col-sm-6">
                  <div class="security-card web-height">
                     <i class="flaticon-consulting"></i>
                     <h3><a href="#!">ERP Development</a></h3>
                     <p>Enterprise Resource Planning systems are software systems that prove to be of great help in operations planning, administration and to optimize internal business processes, 
                     comprising of manufacturing, supply chain, financials, customer relationship management.</p>
                  </div>
               </div>
           </div>
        </div>
     </div>
    <!--end-about-area -->
    
@endsection