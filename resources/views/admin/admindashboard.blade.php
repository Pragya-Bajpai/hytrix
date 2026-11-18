
@extends('admin.layout.master')

@section('content')

<style>
/* =========================================
   HYTRIX PREMIUM DASHBOARD
   Theme: Navy Blue + Sky Blue
========================================= */

:root {
    --hytrix-navy: #263d79;
    --hytrix-dark: #17264b;
    --hytrix-blue: #344f91;
    --hytrix-sky: #4fc3df;
    --hytrix-light: #e9faff;
    --hytrix-white: #ffffff;
    --hytrix-text: #25365e;
}

/* Main Content */
.content-wrapper {
    background: #f1f5fc !important;
    min-height: calc(100vh - 57px);
    padding-bottom: 30px;
}

/* Dashboard Heading */
.content-header {
    padding: 25px 25px 15px;
}

.content-header h1 {
    font-size: 27px;
    font-weight: 800;
    color: var(--hytrix-navy);
    letter-spacing: -0.5px;
    margin: 0;
}

.content-header .breadcrumb {
    background: transparent;
    margin: 0;
    padding: 7px 0;
    font-size: 13px;
}

.content-header .breadcrumb a {
    color: #38aeca;
    font-weight: 600;
}

.content-header .breadcrumb-item.active {
    color: #71809e;
}

/* Dashboard Intro */
.dashboard-intro {
    margin: 0 0 25px;
    padding: 23px 27px;
    border-radius: 17px;
    background: linear-gradient(115deg, #263d79 0%, #344f91 60%, #319fc3 100%);
    color: #fff;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(38, 61, 121, .16);
}

.dashboard-intro:before {
    content: "";
    position: absolute;
    width: 210px;
    height: 210px;
    right: 60px;
    top: -125px;
    border: 35px solid rgba(255,255,255,.07);
    border-radius: 50%;
}

.dashboard-intro:after {
    content: "";
    position: absolute;
    width: 150px;
    height: 150px;
    right: -45px;
    bottom: -105px;
    background: rgba(79,195,223,.18);
    border-radius: 50%;
}

.dashboard-intro h2 {
    font-size: 21px;
    font-weight: 800;
    margin: 0 0 7px;
    position: relative;
    z-index: 1;
}

.dashboard-intro p {
    margin: 0;
    font-size: 13px;
    color: rgba(255,255,255,.8);
    position: relative;
    z-index: 1;
}

/* Dashboard Cards */
.hytrix-stat-card {
    position: relative;
    background: #fff;
    border-radius: 15px;
    padding: 23px 22px;
    margin-bottom: 23px;
    min-height: 155px;
    overflow: hidden;
    border: 1px solid #e5ebf5;
    box-shadow: 0 5px 18px rgba(34, 57, 103, .07);
    transition: all .3s ease;
}

.hytrix-stat-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 13px 28px rgba(34, 57, 103, .14);
    border-color: rgba(79,195,223,.6);
}

/* Card top accent */
.hytrix-stat-card:before {
    content: "";
    position: absolute;
    height: 4px;
    top: 0;
    left: 0;
    right: 0;
    background: linear-gradient(90deg, #344f91, #50c4e2);
}

/* Card Layout */
.stat-card-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
}

.stat-card-info {
    min-width: 0;
}

.stat-card-label {
    color: #7886a1;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 12px;
    display: block;
    letter-spacing: .2px;
}

.stat-card-number {
    color: #263d79;
    font-size: 34px;
    font-weight: 800;
    line-height: 1;
    margin: 0;
}

.stat-card-subtitle {
    font-size: 11px;
    color: #a0aabe;
    margin-top: 9px;
    display: block;
}

/* Card Icon */
.stat-card-icon {
    width: 59px;
    height: 59px;
    min-width: 59px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 16px;
    color: #fff;
    font-size: 23px;
    background: linear-gradient(135deg, #344f91, #50c4e2);
    box-shadow: 0 6px 15px rgba(52, 79, 145, .2);
    transition: all .3s ease;
}

.hytrix-stat-card:hover .stat-card-icon {
    transform: rotate(-7deg) scale(1.08);
}

/* Individual Icon Colors */
.stat-jobs .stat-card-icon {
    background: linear-gradient(135deg, #344f91, #50c4e2);
}

.stat-applications .stat-card-icon {
    background: linear-gradient(135deg, #287aab, #54c9e1);
}

.stat-contact .stat-card-icon {
    background: linear-gradient(135deg, #263d79, #6686cf);
}

.stat-clients .stat-card-icon {
    background: linear-gradient(135deg, #2499ae, #55d1d5);
}

/* Section Title */
.dashboard-section-title {
    color: #263d79;
    font-size: 16px;
    font-weight: 800;
    margin: 0 0 18px;
}

/* Responsive */
@media (max-width: 767px) {
    .content-header {
        padding: 18px 15px 12px;
    }

    .content-header h1 {
        font-size: 23px;
    }

    .content-header .breadcrumb {
        float: none !important;
        margin-top: 8px;
    }

    .dashboard-intro {
        padding: 20px;
        margin-bottom: 20px;
    }

    .dashboard-intro h2 {
        font-size: 18px;
    }

    .hytrix-stat-card {
        padding: 19px;
        min-height: 135px;
        margin-bottom: 16px;
    }

    .stat-card-number {
        font-size: 29px;
    }

    .stat-card-icon {
        width: 49px;
        height: 49px;
        min-width: 49px;
        font-size: 20px;
    }
}

@media (max-width: 380px) {
    .stat-card-label {
        font-size: 12px;
    }

    .stat-card-number {
        font-size: 26px;
    }
}
</style>

<div class="content-wrapper">

    <!-- Page Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 align-items-center">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Welcome Banner -->
            <div class="dashboard-intro">
                <h2>Welcome to Hytrix Technologies!</h2>
                <p>Manage your website activities and monitor your business performance from one place.</p>
            </div>

            <!-- Statistics -->
            <h5 class="dashboard-section-title">
                <i class="fas fa-chart-pie mr-2"></i>
                Overview & Statistics
            </h5>

            <div class="row">

                <!-- Total Jobs -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="hytrix-stat-card stat-jobs">
                        <div class="stat-card-content">
                            <div class="stat-card-info">
                                <span class="stat-card-label">Total Jobs</span>
                                <h3 class="stat-card-number">
                                    {{$totaljobs->count()}}
                                </h3>
                                <span class="stat-card-subtitle">Published job posts</span>
                            </div>

                            <div class="stat-card-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Job Applications -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="hytrix-stat-card stat-applications">
                        <div class="stat-card-content">
                            <div class="stat-card-info">
                                <span class="stat-card-label">Total Jobs Mail</span>
                                <h3 class="stat-card-number">
                                    {{$Application->count()}}
                                </h3>
                                <span class="stat-card-subtitle">Job applications received</span>
                            </div>

                            <div class="stat-card-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Contact Mail -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="hytrix-stat-card stat-contact">
                        <div class="stat-card-content">
                            <div class="stat-card-info">
                                <span class="stat-card-label">Total Contact Mail</span>
                                <h3 class="stat-card-number">
                                    {{$totalContact->count()}}
                                </h3>
                                <span class="stat-card-subtitle">Website enquiries received</span>
                            </div>

                            <div class="stat-card-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Happy Clients -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="hytrix-stat-card stat-clients">
                        <div class="stat-card-content">
                            <div class="stat-card-info">
                                <span class="stat-card-label">Total Happy Clients</span>
                                <h3 class="stat-card-number">
                                    {{$happyclients->count()}}
                                </h3>
                                <span class="stat-card-subtitle">Our valued clients</span>
                            </div>

                            <div class="stat-card-icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

@endsection

@section('title')
Dashboard
@endsection
