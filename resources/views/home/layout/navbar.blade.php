 <!-- start-navbar-->
      <div class="navbar-area">
         <div class="mobile-nav">
            <a href="{{url('/')}}" class="logo">
            <img src="{{url('public/assets/images/logos/logo.png')}}" class="logo-one" alt="Logo">
            <img src="{{url('public/assets/images/logos/logo.png')}}" class="logo-two" alt="Logo">
            </a>
         </div>
         <div class="main-nav">
            <div class="container">
               <nav class="navbar navbar-expand-md navbar-light ">
                  <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{url('public/assets/images/logos/logo.png')}}" class="logo-one" alt="Logo">
                  <img src="{{url('public/assets/images/logos/logo.png')}}" class="logo-two" alt="Logo">
                  </a>
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                     <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                           <a href="{{route('homedashboard')}}" class="nav-link  {{Route::current()->getName() == 'homedashboard' ? 'active' : " "}}">
                           Home
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('about')}}" class="nav-link {{Route::current()->getName() == 'about' ? 'active' : " "}}">
                           Why Choose Us
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#!" class="nav-link {{Route::current()->getName() == 'software' || Route::current()->getName() == 'web' || Route::current()->getName() == 'android' || Route::current()->getName() == 'ecommerce' || Route::current()->getName() == 'digital' || Route::current()->getName() == 'webhost' || Route::current()->getName() == 'api'  ? 'active' : " "}}">
                           Services
                           <i class='bx bx-caret-down'></i>
                           </a>
                           <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{route('web')}}" >
                                    Web Development
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('software')}}" class="nav-link ">
                                Software Development
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('android')}}" >
                                    Android Development
                                </a>
                            </li>
                            <li class="nav-item">
                              <a href="{{route('ecommerce')}}" >
                                E-Commerce Development
                             </a>
                           </li>
                            <li class="nav-item">
                              <a href="{{route('digital')}}">
                                  Digital Marketing
                             </a>
                           </li>
                            <li class="nav-item">
                              <a href="{{route('webhost')}}" >
                                  Web Hosting
                             </a>
                           </li>
                            <li class="nav-item">
                              <a href="{{route('api')}}" >
                                  Api Integration
                             </a>
                           </li>
						     <li class="nav-item">
                              <a href="#" >
                                   Cloud Computing
                             </a>
                           </li>
                           </ul>
                        </li>
                        <!--li class="nav-item">
                           <a href="{{url('product')}}" class="nav-link {{Route::current()->getName() == 'product' ? 'active' : " "}}">
                           Product
                           </a>
                        </li-->

                        <li class="nav-item">
                           <a href="{{url('portfolio')}}" class="nav-link {{Route::current()->getName() == 'portfolio' ? 'active' : " "}}">
                              Portfolio
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#!" class="nav-link {{Route::current()->getName() == 'career' ? 'active' : " "}}">
                           Work With Us
                           <i class='bx bx-caret-down'></i>
                           </a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="{{url('career')}}" class="nav-link ">
                                  Career
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('contact')}}" class="nav-link {{Route::current()->getName() == 'contact' ? 'active' : " "}}">
                           Contact
                           </a>
                        </li>
                     </ul>
                     <div class="nav-side d-display">
                        <div class="nav-side-item">
                           <div class="get-btn">
                              <a href="{{url('contact')}}" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <div class="side-nav-responsive">
            <div class="container-max">
               <div class="dot-menu">
                  <div class="circle-inner">
                     <div class="in-circle circle-one"></div>
                     <div class="in-circle circle-two"></div>
                     <div class="in-circle circle-three"></div>
                  </div>
               </div>
               <div class="container">
                  <div class="side-nav-inner">
                     <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item nav-side">
                           <div class="get-btn">
                              <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end-navbar-->
