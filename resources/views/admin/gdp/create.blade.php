@extends('admin.layouts.master')

@section('content')
	

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						
						<h1>heelo</h1>
					</div>
					<div class="card-title">
						
					</div>
					<div class="card-body">
							
						<form action="{{route('admin.gdp.store')}}" method="POST">
							@csrf

							<div class="form-group">
								<label for="">Region</label>
								<select name="region_id" class="form-control" id=""></select>
							</div>

							<div class="form-group">
								<label for="">Value</label>
								<input type="text" name="value" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Date</label>
								<input type="text" name="date" class="form-control">
							</div>

							<button type="submit" class="btn btn-primary">Create</button>
						</form>

					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection