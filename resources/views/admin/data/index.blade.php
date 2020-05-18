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
              <li class="breadcrumb-item active">Data</li>
              <li class="breadcrumb-item active">Lists</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<a href="{{route('admin.data.create')}}" class="btn btn-primary btn-sm">
		              <i class="fa fa-plus"></i> add data</a>
					</div>
					<div class="card-body">
						<table class="table table-bordered" id="datas">
							<thead>
								<tr>
									<th>ID</th>
									<th>Region</th>
									<th>Category</th>
									<th>SubCategory</th>
									<th>Name</th>
									<th>Value</th>
									<th>Percent</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($datas as $data)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$data->region->region_name}}</td>
									<td>{{$data->category->category_name}}</td>
									<td>{{$data->subCategory->sub_category_name}}</td>
									<td>{{$data->name}}</td>
									<td>{{$data->value}}</td>
									<td>{{$data->percent}}%</td>
									<td>
										<a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#data{{$data->id}}"><i class="fa fa-edit"></i></a>
										<form action="{{route('admin.data.destroy',$data->id)}}" method="POST" onclick="return confirm('Do you want to delete this item?')" style="display: inline;">
											@csrf
											@method('delete')
											<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
										</form>
									</td>
									<div class="modal fade" id="data{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										        <form action="{{route('admin.data.update', $data->id)}}" method="POST">
								                  @csrf
								                  @method('PATCH')
								                  <div class="card-body">

								                  	<div class="form-group">
									                      <label for="">Region Name</label>
									                        <select name="region_id" id="" class="form-control">
									                          <option value="">Choose Region</option>
									                          @foreach($regions as $key=>$value)
									                          		<option value="{{ $key }}" {{ $data->region_id == $key ? "selected" : "" }}>{{$value}}</option>
									                          @endforeach
									                        </select>
									                </div>

									                <div class="form-group">
									                      <label for="">Category</label>
									                        <select name="category_id" id="" class="form-control">
									                          <option value="">Choose Category</option>
									                          @foreach($categories as $key=>$value)
									                          		<option value="{{ $key }}" {{ $data->category_id == $key ? "selected" : "" }}>{{$value}}</option>
									                          @endforeach
									                        </select>
									                </div>

									                <div class="form-group">
									                      <label for="">Sub Category</label>
									                        <select name="sub_category_id" id="" class="form-control">
									                          <option value="">Choose SubCategory</option>
									                          @foreach($sub_categories as $key=>$value)
									                          		<option value="{{ $key }}" {{ $data->sub_category_id == $key ? "selected" : "" }}>{{$value}}</option>
									                          @endforeach
									                        </select>
									                </div>


								                    <div class="form-group">
								                      <label>Name</label>
								                      <input type="text" name="name" value="{{$data->name}}" class="form-control" id="" placeholder="Name">
								                    </div>
								                     <div class="form-group">
								                      <label>Value</label>
								                      <input type="text" name="value" value="{{$data->value}}" class="form-control" id="" placeholder="Value">
								                    </div>
								                     <div class="form-group">
								                      <label>Percent</label>
								                      <input type="text" name="percent" value="{{$data->percent}}" class="form-control" id="" placeholder="%">
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
	</div>

@endsection
@push('scripts')
<script>
  $(function () {
    $("#datas").DataTable();
   
  });
</script>

@endpush