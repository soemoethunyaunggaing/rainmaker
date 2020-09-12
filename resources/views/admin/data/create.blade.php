@extends('admin.layouts.master')

@section('css')
  <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}" />
    
@endsection

@section('content')
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-sm-12">
				<div class="card">
					<div class="card-header">
		                <h3 class="card-title">Data</h3>
		                  
		                <a href="{{route('admin.data.index')}}" class="back btn btn-primary btn-sm"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a>
		            </div>
					<div class="card-body">
						
						<form action="{{route('admin.data.store')}}" method="POST" autocomplete="off">
							@csrf
							<div class="form-group">
								<label for="">Region</label>
								<select name="region_id" id="" class="form-control">
									<option value="">Choose Region</option>
									@foreach($regions as $key=>$value)
										<option value="{{$key}}">{{$value}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="">Category</label>
								<select name="category_id" id="" class="form-control">
									<option value="">Choose Category</option>
									@foreach($categories as $key=>$value)
										<option value="{{$key}}">{{$value}}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="">Sub Category</label>
								<select name="sub_category_id" id="" class="form-control">
									<option value="">Choose SubCategory</option>
									{{-- @foreach($sub_categories as $key=>$value)
										<option value="{{$key}}">{{$value}}</option>
									@endforeach --}}
								</select>
							</div>

							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" name="name" placeholder="Name">
							</div>

							<div class="form-group">
								<label for="">Value</label>
								<input type="text" class="form-control" name="value" placeholder="Value">
							</div>

							<div class="form-group">
								<label for="">Percentage</label>
								<input type="text" class="form-control" name="percent" placeholder="Value">
							</div>

							<div class="form-group">
		                      <label for="">From Date</label>
		                      <input type="text" name="start_date" class="form-control" id="start_date" placeholder="From Date">
		                      <span class="text-danger">{{ $errors->first('start_date') }}</span>
		                    </div>
		                    <div class="form-group">
		                      <label for="">To Date</label>
		                      <input type="text" name="end_date" class="form-control" id="end_date" placeholder="To Date">
		                      <span class="text-danger">{{ $errors->first('end_date') }}</span>
		                    </div>
                    

							
							<button type="submit" class="btn btn-primary">Create</button>

						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection

@section('script')
	<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
	  <script>
	   $("#start_date").datepicker( {
	    format: "yyyy-mm-dd",
	    viewMode: "months", 
	    minViewMode: "months",
	    autoclose: true,
	});
	</script>
	<script>
	   $("#end_date").datepicker( {
	    format: "yyyy-mm-dd",
	    viewMode: "months", 
	    minViewMode: "months",
	    autoclose: true,
	});
	</script>
	<script>
		$(document).ready( function(){
		    $('select[name="category_id"]').on('change', function(){

		        var subcategory=$(this).val();
		        if(subcategory){
		          $.ajax({
		          url: '/admin/data/subcategoryData/' + subcategory,
		          type: "GET",
		          dataType: "json",

		          success: function(data) {
		                        $('select[name="sub_category_id"]').empty();
		                        $('select[name="sub_category_id"]').append('<option value="">--Choose Sub Categories--</option>');


		                        $.each(data, function(key, value) {
		                            $('select[name="sub_category_id"]').append('<option value="'+key+'">'+value+'</option>');
		                        });
		                    }, 
		                });
		        }
    });
   });

	</script>

@endsection