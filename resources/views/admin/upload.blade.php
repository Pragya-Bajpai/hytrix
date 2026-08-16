@extends('admin.layout.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mt-3">
          <!-- left column -->
          <div class="col-md-12">
									@if(session()->has('success'))
									<p class="alert alert-success w-100 text-white mt-3"> {{ session()->get('success') }}</p>
									@elseif(session()->has('failed'))
									<p class="alert alert-danger w-100 text-white mt-3"> {{ session()->get('failed') }}</p>
									@endif
            <!-- general form elements -->
            <div class="card card-primary" style="position:relative;">
              <div class="card-header">
                <h3 class="card-title">Post Update</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  
              <form action="{{route('uploadstore')}}" method="POST" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
				   <div class="form-group d-flex gap-5 justify-content-between align-items-center">
                   <div>
				    <label for="exampleIputImage" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="exampleIputImage" placeholder="Enter Requirement" name="file" >
				   </div>
                  </div>
                </div>
                <!-- /.card-body -->
                 <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
   </div>
 
</div>   
    </section>
   
  
@endsection
@section('title')
Job Update
@endsection
