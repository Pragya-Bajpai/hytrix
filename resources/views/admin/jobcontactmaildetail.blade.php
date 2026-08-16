@extends('admin.layout.master')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Job Contact mail Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Job Contact mail Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
	<div class="col-md-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>CV</th>
                  </tr>
                  </thead>
                  <?php $i=0; ?>
                  <tbody>
                  @foreach($data as $datas)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$datas->fname}}</td>
                      <td>{{$datas->lname}}</td>
                      <td>{{$datas->email}}</td>
                      <td>{{$datas->mobile}}</td>
                      <td><iframe src="{{asset('/public/assets/file')}}/{{$datas->file}}" style="width:50px;height:50px"></iframe></td>
                    </tr>
                  @endforeach      
                  <tfoot>
                  <tr>
                    <th>Sr.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>CV</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
   		  </div>
       </div><!-- /.container-fluid -->	
		</div>
	 </div>
	</section>	
	
	
</div> <!-- Content Wrapper end. Contains page content -->
@endsection
@section('title')
Job Mail Details 
@endsection