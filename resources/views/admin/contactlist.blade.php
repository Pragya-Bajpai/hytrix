@extends('admin.layout.master')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Job Contact Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact mail Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- 
			   <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
			  /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					      <th>Sr.</th>
             		<th>Name</th>
             		<th>Email</th>
             		<th>Subject</th>
             		<th>Message</th>
                  </tr>
                  </thead>
                  <?php $i=0; ?>
                  <tbody>
                 	@foreach($user as $users)                 	
                 		<tr>
                 			<td>{{++$i}}</td>
                 			<td>{{$users->name}}</td>
                 			<td>{{$users->email}}</td>
                 			<td>{{$users->msg_subject}}</td>
                 			<td>{{$users->message}}</td>
                 		</tr>               
                 	@endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr.</th>
             		<th>Name</th>
             		<th>Email</th>
             		<th>Subject</th>
             		<th>Message</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
   <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
  
@endsection


@section('title')
Contact Details
@endsection