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
			  
              <form action="{{route('jobappdetailupdate')}}" method="POST" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputtext">Title</label>
					<input type="text" class="form-control d-none" id="id" placeholder="Enter Title" name="id" value="{{$data->id}}">
                    <input type="text" class="form-control" id="exampleInputtext" placeholder="Enter Title" name="title" value="{{$data->title}}" required>
					
                  </div>
				  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea id="editor" class="block w-full mt-1 rounded-md" name="description" cols="30" rows="5"  name="description" required>{{$data->description}}</textarea>
					
                  </div>
				  
				   <div class="form-group d-flex gap-5 justify-content-between align-items-center">
                   <div>
				    <label for="exampleIputImage" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="exampleIputImage" placeholder="Enter Requirement" name="file" >
				   </div>
				   <div style="display: flex;
    margin-right: 80px;
    flex-direction: column;">
				    <label for="exampleIputImage" class="form-label">Old Image</label>
                  <img src="{{$data->file}}" alt="old image" width="100" height="100" class="img-fluid">
				   </div>
                  </div>
				   
				  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
   
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>


  <script>
		CKEDITOR.replace( 'editor' );
</script>
  
@endsection
@section('title')
Job Update
@endsection
