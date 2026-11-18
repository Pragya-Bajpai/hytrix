  <!-- Main Sidebar Container -->
<style>

/* =====================================================
   HYTRIX TECHNOLOGIES
   PREMIUM ADMIN SIDEBAR DESIGN
   Theme: Royal Blue + Sky Blue
===================================================== */

:root {
    --hy-dark: #263B73;
    --hy-blue: #344B87;
    --hy-blue-light: #405A9A;
    --hy-cyan: #50C2DF;
    --hy-cyan-light: #70D5ED;
    --hy-white: #ffffff;
}

/* =====================================================
   1. MAIN SIDEBAR
===================================================== */

.main-sidebar,
.main-sidebar.sidebar-dark-primary {
    background: linear-gradient(
        180deg,
        #344B87 0%,
        #2D427C 45%,
        #263B73 100%
    ) !important;

    border-right: 1px solid rgba(255,255,255,0.07) !important;

    box-shadow: 5px 0 22px rgba(20,35,75,0.15) !important;
}

/* Remove default AdminLTE background */

.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link {
    background-color: transparent;
}

/* =====================================================
   2. BRAND / LOGO SECTION
===================================================== */

.main-sidebar .brand-link {
    display: flex !important;
    align-items: center !important;

    min-height: 68px;

    padding: 12px 15px !important;

    background: rgba(255,255,255,0.035) !important;

    border-bottom: 1px solid rgba(255,255,255,0.13) !important;

    transition: 0.3s ease;
}

.main-sidebar .brand-link:hover {
    background: rgba(80,194,223,0.09) !important;
}

.main-sidebar .brand-image {
    width: 38px !important;
    height: 38px !important;

    margin: 0 11px 0 0 !important;

    padding: 3px;

    object-fit: contain;

    background: #ffffff;

    border-radius: 8px;

    opacity: 1 !important;

    box-shadow: none !important;
}

.main-sidebar .brand-text {
    color: #ffffff !important;

    font-size: 14px !important;

    font-weight: 700 !important;

    letter-spacing: 0.2px;
}

/* =====================================================
   3. SIDEBAR BODY
===================================================== */

.main-sidebar .sidebar {
    padding: 17px 0 20px !important;
}

/* =====================================================
   4. NAVIGATION MENU
===================================================== */

.main-sidebar .nav-sidebar {
    padding: 0 10px !important;
}

.main-sidebar .nav-sidebar > .nav-item {
    margin-bottom: 6px !important;
}

/* Normal menu buttons */

.main-sidebar .nav-sidebar > .nav-item > .nav-link {
    display: flex !important;
    align-items: center !important;

    min-height: 46px;

    padding: 11px 13px !important;

    margin: 0 !important;

    border-radius: 9px !important;

    background: transparent !important;

    color: rgba(255,255,255,0.86) !important;

    border: 1px solid transparent !important;

    transition:
        background 0.3s ease,
        color 0.3s ease,
        transform 0.3s ease,
        box-shadow 0.3s ease;
}

/* Menu text */

.main-sidebar .nav-sidebar .nav-link p {
    margin: 0 !important;

    color: inherit !important;

    font-size: 13px !important;

    font-weight: 500 !important;

    letter-spacing: 0.1px;
}

/* Menu icons */

.main-sidebar .nav-sidebar .nav-link .nav-icon {
    width: 25px !important;

    margin: 0 9px 0 0 !important;

    color: var(--hy-cyan) !important;

    font-size: 16px !important;

    text-align: center;

    transition: 0.3s ease;
}

/* =====================================================
   5. MENU HOVER EFFECT
===================================================== */

.main-sidebar .nav-sidebar > .nav-item > .nav-link:hover {
    background: linear-gradient(
        100deg,
        rgba(80,194,223,0.20),
        rgba(80,194,223,0.07)
    ) !important;

    border-color: rgba(80,194,223,0.20) !important;

    color: #ffffff !important;

    transform: translateX(3px);
}

.main-sidebar .nav-sidebar > .nav-item > .nav-link:hover .nav-icon {
    color: #ffffff !important;

    transform: scale(1.08);
}

/* =====================================================
   6. ACTIVE MENU BUTTON
===================================================== */

.main-sidebar .nav-sidebar > .nav-item.activemenu > .nav-link,
.main-sidebar .nav-sidebar > .nav-item > .nav-link.active {
    background: linear-gradient(
        105deg,
        #50C2DF 0%,
        #3FAED2 48%,
        #344B87 100%
    ) !important;

    border: 1px solid rgba(255,255,255,0.20) !important;

    color: #ffffff !important;

    font-weight: 600 !important;

    box-shadow:
        0 5px 16px rgba(15,30,70,0.23),
        inset 0 1px 0 rgba(255,255,255,0.17) !important;

    transform: none !important;
}

/* Active text */

.main-sidebar .nav-sidebar > .nav-item.activemenu > .nav-link p,
.main-sidebar .nav-sidebar > .nav-item > .nav-link.active p {
    color: #ffffff !important;

    font-weight: 600 !important;
}

/* Active icon */

.main-sidebar .nav-sidebar > .nav-item.activemenu > .nav-link .nav-icon,
.main-sidebar .nav-sidebar > .nav-item > .nav-link.active .nav-icon {
    color: #ffffff !important;
}

/* Active hover */

.main-sidebar .nav-sidebar > .nav-item.activemenu > .nav-link:hover,
.main-sidebar .nav-sidebar > .nav-item > .nav-link.active:hover {
    background: linear-gradient(
        105deg,
        #62D0E9,
        #405A9A
    ) !important;

    transform: translateY(-1px) !important;
}

/* =====================================================
   7. LOGOUT BUTTON
===================================================== */

.main-sidebar .nav-sidebar > .nav-item:last-child {
    margin-top: 22px !important;
}

.main-sidebar .nav-sidebar > .nav-item:last-child > .nav-link {
    background: rgba(255,255,255,0.035) !important;

    border: 1px solid rgba(255,255,255,0.16) !important;

    color: #ffffff !important;
}

.main-sidebar .nav-sidebar > .nav-item:last-child > .nav-link:hover {
    background: linear-gradient(
        100deg,
        rgba(80,194,223,0.25),
        rgba(52,75,135,0.55)
    ) !important;

    border-color: var(--hy-cyan) !important;

    transform: translateX(3px);
}

/* =====================================================
   8. SIDEBAR SCROLLBAR
===================================================== */

.main-sidebar .sidebar::-webkit-scrollbar {
    width: 4px;
}

.main-sidebar .sidebar::-webkit-scrollbar-track {
    background: transparent;
}

.main-sidebar .sidebar::-webkit-scrollbar-thumb {
    background: rgba(80,194,223,0.55);

    border-radius: 20px;
}

.main-sidebar .sidebar::-webkit-scrollbar-thumb:hover {
    background: var(--hy-cyan);
}

/* =====================================================
   9. COLLAPSED SIDEBAR
===================================================== */

@media (min-width: 768px) {

    .sidebar-mini.sidebar-collapse .main-sidebar .brand-link {
        padding: 12px 10px !important;
    }

    .sidebar-mini.sidebar-collapse .main-sidebar .brand-image {
        float: none !important;

        margin: 0 auto !important;
    }

}

/* =====================================================
   10. RESPONSIVE
===================================================== */

@media (max-width: 767px) {

    .main-sidebar .brand-link {
        min-height: 62px;
    }

    .main-sidebar .nav-sidebar > .nav-item > .nav-link {
        min-height: 44px;

        padding: 10px 12px !important;
    }

    .main-sidebar .nav-sidebar .nav-link p {
        font-size: 13px !important;
    }

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

