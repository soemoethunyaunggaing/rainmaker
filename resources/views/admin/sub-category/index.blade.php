@extends('admin.layouts.master')


@section('content')
	
	<section class="content">
      	<div class="row">
	        <div class="col-md-12">
	          	<div class="card">
		            <div class="card-header">
		              <a href="{{route('admin.sub-categories.create')}}" class="btn btn-primary btn-sm">
		              <i class="fa fa-plus"></i> add subcategory</a>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
			            <table id="sub-categories" class="table table-bordered table-strip">
			                <thead>
			                <tr>
			                  <th>ID</th>
			                  <th>Region</th>
			                  <th>Category</th>
			                  <th>Name</th>
			                  <th width="15%">Action</th>
			                 
			                </tr>
			                </thead>
			                <tbody>
			                	@foreach($subcategories as $value)
			                	<tr>
			                		
									<td>{{$loop->iteration}}</td>
				                	<td>{{$value->region->region_name}}</td>
				                	<td>{{$value->category->category_name}}</td>
				                	<td>{{$value->sub_category_name}}</td>
				                	
				                	<td>
				                		<a href="" class="btn btn-primary btn-sm"   data-toggle="modal" data-target="#sub-category{{$value->id}}"><i class="fa fa-edit"></i></a>
				                		<form action="" method="post" onclick="return confirm('Do you want to delete this item?')" style="display: inline;">
				                			@csrf
				                			@method('delete')
				                			<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
				                		</form>
				                	</td>

					                	<div class="modal fade" id="sub-category{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										        <form action="" method="POST">
								                  @csrf
								                  @method('PATCH')
								                  <div class="card-body">
								                    <div class="form-group">
								                      <label for="exampleInputEmail1"> Business Name</label>
								                      <input type="text" name="name" value="" class="form-control" id="" placeholder="enter text">
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
    $("#sub-categories").DataTable();
   
  });
</script>

@endpush