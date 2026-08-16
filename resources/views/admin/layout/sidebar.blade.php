  <!-- Main Sidebar Container -->
  <style>
  .nav-item{
	  margin:2px 0px!important;
  }
  .activemenu{
	  background-color:blue!important;
	  border-radius:4px!important;
	  color:white!important;
  }
  
  </style>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admindashboard')}}" class="brand-link">
      <img src="public/dist/img/logo1.png" alt="company Logo" class="brand-image img-circle elevation-3 img-fluid" style="opacity: .8">
      <span class="brand-text font-weight-light">Hytrix Technologies</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
	  {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
	 
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item {{Route::current()->getName() == 'admindashboard' ? 'activemenu' : " "}}">
                <a href="{{route('admindashboard')}}" class="nav-link">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
               <li class="nav-item  {{Route::current()->getName() == 'jobapp' ? 'activemenu' : " "}}">
                <a href="{{url('jobapp')}}" class="nav-link ">
				  <i class="fa-solid fa-envelopes-bulk nav-icon"></i>
                  <p>Post Job</p>
                </a>
              </li>
               <li class="nav-item {{Route::current()->getName() == 'jobappdetail' ? 'activemenu' : " "}}">
                <a href="{{url('jobappdetail')}}" class="nav-link">
				<i class="fa-regular fa-address-card nav-icon"></i>
                  <p>Job details</p>
                </a>
              </li>
			   <li class="nav-item {{Route::current()->getName() == 'jobcontactmaildetail' ? 'activemenu' : " "}}">
                <a href="{{url('jobcontactmaildetail')}}" class="nav-link">
				  <i class="fa-solid fa-inbox nav-icon"></i>
                  <p>Job mail details</p>
                </a>
              </li>
			   <li class="nav-item {{Route::current()->getName() == 'contactlist' ? 'activemenu' : " "}}">
                <a href="{{url('contactlist')}}" class="nav-link">
				<i class="fa-solid fa-address-book nav-icon"></i>
                  
                  <p>Contact mail Details</p>
                </a>
              </li>
			  <li class="nav-item {{Route::current()->getName() == 'portfoliodetail' ? 'activemenu' : " "}}">
                <a href="{{url('portfoliodetail')}}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Happy Clients</p>
                </a>
              </li>
			 
			   <li class="nav-item {{Route::current()->getName() == 'signout' ? 'activemenu' : " "}}">
            <a href="{{route('signout')}}" class="nav-link">
			<i class="fa-solid fa-right-from-bracket nav-icon"></i>
              
              <p>Logout</p>
            </a>
          </li>
		  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  