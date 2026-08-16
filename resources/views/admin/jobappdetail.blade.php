@extends('admin.layout.master')

@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1>Job Post Detail</h1>
			
          </div>
		 <div class="col-sm-4">
					@if(session()->has('success'))
					<p class="alert alert-success w-100" id="msg-success"> {{ session()->get('success') }}</p>
					@elseif(session()->has('failed'))
					<p class="alert alert-danger w-100 " id="msg-failed"> {{ session()->get('failed') }}</p>
					@endif
		  </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Job Post Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
          <div class="col-sm-12">
		  <table class="table">
		  <thead>
			<tr class="text-capitalize">
			  <th scope="col">Id</th>
			  <th scope="col">title</th>
			  <th scope="col">description</th>
			  <th scope="col">file</th>
			   <th scope="col" colspan="2">action</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php $i=0; ?>
		  @foreach($user as $users)
		 
			<tr>
			  <th scope="row"> {{ ++$i }}</th>
			  <td>{{ $users->title }}</td>
			  <td>{!! $users->description !!}</td>
			  <td> <img src="{{ asset('public/'.$users->file) }}" class='img-fluid' style="width:50px;height:50px;"> </td>
			  <td class="d-flex jsutify-content-center align-items-center ">
			  <a href="{{route('jobappdetailchange',['id'=>$users->id])}}"  class="btn btn-success text-white d-inline-block edit-btn" data-id="{{$users->id}}">Edit</a>
			  <a href="#"  class="btn btn-danger text-white d-inline-block delete-btn" data-id="{{ $users->id }}" style="margin-left:5px;">Delete</a>
			  </td>
			</tr>
			@endforeach
		  </tbody>
</table>


          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
  
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
	
// delete function code 
    
$(document).on("click",".delete-btn",function(e){
            
           if(confirm("do you really want to delete this record?")){
            e.preventDefault();
            var studentid =$(this).data("id");
            var element = $(this);

            $.ajax({
                url : "{{ route('jobappdetaildelete') }}",
                type : "get",
                data : {id : studentid},
                success : function(data){
					console.log(data);
                    if(data==1){
                        $(element).closest("tr").fadeOut();
                    }else{
                      alert('operation has been failed!');
                    }
                }
            });
           }
        });
    
// delete function code 
		
	});
	</script>
</div>

@endsection
@section('title')
Job Details 
@endsection