@extends('admin.layouts.master')


@section('content')
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Region</li>
              <li class="breadcrumb-item active">Lists</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
	<section class="content">
      	<div class="row">
	        <div class="col-md-12">
	          	<div class="card">
		            <div class="card-header">
		              <a href="{{route('admin.regions.create')}}" class="btn btn-primary btn-sm">
		              <i class="fa fa-plus"></i> add region</a>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
			            <table id="business" class="table table-bordered table-strip">
			                <thead>
			                <tr>
			                  <th>ID</th>
			                  <th style="text-align: center;">Name</th>
			                  <th width="15%">Action</th>
			                 
			                </tr>
			                </thead>
			                <tbody>
			                	@foreach($regions as $region)
			                	<tr>
			                		
									<td>{{$loop->iteration}}</td>
				                	<td style="text-align: center;">{{$region->region_name}}</td>
				                	<td>
				                		<a href="" class="btn btn-primary btn-sm"   data-toggle="modal" data-target="#region{{$region->id}}"><i class="fa fa-edit"></i></a>
				                		<form action="" method="post" onclick="return confirm('Do you want to delete this item?')" style="display: inline;">
				                			@csrf
				                			@method('delete')
				                			<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
				                		</form>
				                	</td>
					                	<div class="modal fade" id="region{{$region->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										        <form action="{{route('admin.regions.update', $region->id)}}" method="POST">
								                  @csrf
								                  @method('PATCH')
								                  <div class="card-body">
								                    <div class="form-group">
								                      <label for="exampleInputEmail1">Region Name</label>
								                      <input type="text" name="name" value="{{$region->name}}" class="form-control" id="" placeholder="Region Name">
								                    </div>
								                    
								                  </div>
								                  
											      <div class="modal-footer">
											        <button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
											        <button type="submit" class="btn btn-update">Update</button>
											      </div>
								                </form>
										      </div>
										    </div>
										  </div>
										</div>
				                	
			                	</tr>
			                	@endforeach
			                </tbody>
			               {{--  <tfoot>
			                	<th>ID</th>
			                  	<th style="text-align:center;">Name</th>
			                  	<th>Action</th>
			                  	
			                </tfoot> --}}
			            </table>
						
						  
						</div>
		            </div>
	          	</div>
	         </div>
       
    </section>
@endsection

@push('scripts')
<script>
  $(function () {
    $("#business").DataTable();
   
  });
</script>

@endpush