@extends('admin.layout.master')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
				<div class="card" >
				  <div class="card-body">
					<h5 class="card-title text-primary" style="font-weight:bold!important;"> Total Jobs</h5>
					<p class="card-text text-success" style="font-weight:bold!important;">{{$totaljobs->count()}}</p>
					
				  </div>
				</div>
		  </div>
		  <div class="col-md-6 ">
		  <div class="card" >
				  <div class="card-body">
					<h5 class="card-title text-primary" style="font-weight:bold!important;"> Total Jobs mail</h5>
					<p class="card-text text-success" style="font-weight:bold!important;">{{($Application->count())}}</p>
					
				  </div>
				</div>
		  </div>
		  <div class="col-md-6 ">
		  <div class="card" >
				  <div class="card-body">
					<h5 class="card-title text-primary" style="font-weight:bold!important;"> Total Contact mail</h5>
					<p class="card-text text-success" style="font-weight:bold!important;">{{($totalContact->count())}}</p>
				  </div>
				</div>
		  </div>
		    <div class="col-md-6">
				<div class="card" >
				  <div class="card-body">
					<h5 class="card-title text-primary" style="font-weight:bold!important;"> Total Happy Clients</h5>
					<p class="card-text text-success" style="font-weight:bold!important;">{{($happyclients->count())}}</p>
				  </div>
				</div>
		  </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
		
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
  
@endsection


@section('title')
Dashboard
@endsection