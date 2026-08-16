@extends('admin.layout.master')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <!--
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-4">
            <h1>Form</h1>
            
          </div>
          <div class="col-sm-8">
            <h1>General Form1</h1>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>        
        </div>
      </div>
    </section>
   -->

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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Post A Job</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('jobstore')}}" method="POST" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputtext">Title</label>
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="Enter Post Title" name="title">
					<span class="text-danger">
								   @error('title')
								   {{$message}}
								   @enderror
								  </span>
                  </div>
				  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea id="editor" class="block w-full mt-1 rounded-md" name="description" placeholder="Description.."  cols="30" rows="5" ></textarea>
					<span class="text-danger">
								   @error('description')
								   {{$message}}
								   @enderror
								  </span>
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleIputImage">Upload Image</label>
                    <input type="file" class="form-control" id="exampleIputImage" placeholder="" name="file">
					<span class="text-danger">
								   @error('file')
								   {{$message}}
								   @enderror
								  </span>
                  </div>
				  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->
                 <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Post</button>
                </div>
              </form>
            </div>
          </div>
         
    </section>
   </div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>


  <script>
		CKEDITOR.replace( 'editor' );
</script>
  

@endsection

@section('title')
Post A Job
@endsection