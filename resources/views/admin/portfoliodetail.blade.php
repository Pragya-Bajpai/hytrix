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
                <h3 class="card-title">Post Portfolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('portfoliostore')}}" method="POST" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
                  <div class="d-flex  align-items-center">
				  
				   <div class="form-group w-50 ml-3">
                    <label for="exampleIputImage">Upload Image</label>
                    <input type="file" class="form-control" id="exampleIputImage" placeholder="Enter Requirement" name="image">
					<span class="text-danger">
								   @error('image')
								   {{$message}}
								   @enderror
								  </span>
                  </div>
				  </div>
				  <div class="d-flex justify-content-between align-items-center">
				  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                <!-- /.card-body -->
                 <div class="card-footer " style="background-color:transparent!important;">
                  <button type="submit" class="btn btn-primary">Post</button>
                </div>
				</div>
				  </div>
              </form>
            </div>
          </div>
   </div>
   <div class="row mt-3">
   <div class="col-md-12">
   
   <table class="table">
  <thead class="text-capitalize">
    <tr>
      <th scope="col">sr</th>
      <th scope="col" class="text-center">image</th>
	  <th scope="col" colspan="2" class="text-center">action</th>
    </tr>
  </thead>
   <?php $i=0; ?>
  <tbody>
  @foreach($data as $val)
    <tr>
     <td>{{++$i}}</td>
      <td class="text-center">
	  <img src="{{asset($val->image)}}" class="img-fluid" style="width:50px;height:50px">
	  </td>
	  <td class="text-center">
	  <a href="#"  class="btn btn-success text-white d-inline-block edit-btn" data-id="{{$val->id}}">Edit</a>
	  <a href="#"  class="btn btn-danger text-white d-inline-block delete-btn" data-id="{{ $val->id }}" style="margin-left:5px;">Delete</a>
	  </td>
    </tr>
    @endforeach
  </tbody>
</table>
   <div class="card card-primary bg-white w-100 " id="edit-box"  style="position:absolute;top:-267px;left:0;height:100vh;">
   
     <form action="{{route('portfoliostore')}}" method="POST" enctype="multipart/form-data">
              	@csrf
                <div class="card-body">
                  <div class="d-flex  align-items-center">
				  
				   <div class="form-group w-50 ml-3">
                    <label for="exampleIputImage">Upload Image</label>
                    <input type="file" class="form-control" id="exampleIputImage" placeholder="Enter Requirement" name="image">
					<span class="text-danger">
								   @error('image')
								   {{$message}}
								   @enderror
								  </span>
                  </div>
				  </div>
				  <div class="d-flex justify-content-between align-items-center">
				  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                <!-- /.card-body -->
                 <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				</div>
                
				   <div class="form-group w-50 ml-3">
                    <label for="exampleIputImage">old Image</label> <br>
                    <img src="" class="img-fluid border" style="width:250px;height:250px" id="old-image">
                  </div>
				  
				  </div>
				  
					<a href="#">
						<span id="close-btn" style=" width: 40px; height: 40px; position: absolute; top: 0; right: 0; border-radius: 50%; margin: 10px;    line-height: 40px;
						text-align: center; font-weight: 600;" class="d-inline-block bg-danger text-white">
						X
						</span>
					</a>
              </form>
   </div>
   
   </div>
   </div>
</div>   
    </section>
   
   
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        
    </script>
  <script>
  $(document).ready(function(){
	  
	  //hide card box code 
	  $('#edit-box').hide();
	  
// delete function code 
    
$(document).on("click",".delete-btn",function(e){
            
           if(confirm("do you really want to delete this record?")){
            e.preventDefault();
            var studentid =$(this).data("id");
            var element = $(this);

            $.ajax({
                url : "{{ route('portfoliodetaildelete') }}",
                type : "get",
                data : {id : studentid},
                success : function(data){
					console.log(data);
                    if(data==1){
                        $(element).closest("tr").fadeOut();
						window.location.href = '{{route('portfoliodetail')}}';
                    }else{
                      alert('operation has been failed!');
                    }
                }
            });
           }
        });
    
// delete function code 
		
		
		//edit box  code hide box-form
		$('#close-btn').click(function(){
		$('#edit-box').hide();
		});
	    
		
	
	  
	  //show all on form box
		$('.edit-btn').click(function(){
			var id= $(this).data('id');
			$.ajax({
				url: '{{ route('happyclientdatashow') }}',
				data: {id : id},
				type: "get",
				success: function(data){				
						  console.log(data[0].image);
						  $('#old-image').attr('src', data[0].image)
						$('#edit-box').show();
				}
			});
		}); // fetch data code end function
		
	  
  });
  
  
  </script>
@endsection
@section('title')
Happy clients
@endsection
