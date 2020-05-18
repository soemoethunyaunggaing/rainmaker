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
              <li class="breadcrumb-item active">Business</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">
   
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-bottom:45px;">
                <div class="card-header">
                <h3 class="card-title">Business</h3>
                  
                <a href="{{route('admin.sub-categories.index')}}" class="back btn btn-primary btn-sm"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a>
                </div>
               
                <form action="{{route('admin.sub-categories.store')}}" method="POST" autocomplete="off">
                  @csrf


                  <div class="card-body" >
        

                     <div class="form-group">
                      <label for="">Region</label>
                      <select name="region_id" class="form-control"  id="" placeholder="Region Name">
                        <option value="">Choose Region</option>
                        @foreach($regions as $key=>$value)
                          <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                      </select>
                      
                      <span class="text-danger">{{ $errors->first('region_id') }}</span>
                    </div>


                     <div class="form-group">
                      <label for="">Category</label>
                      <select name="category_id" class="form-control"  id="" placeholder="Category Name">
                        <option value="">Choose Category</option>
                        @foreach($categories as $key=>$value)
                          <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                      </select>
                      
                      <span class="text-danger">{{ $errors->first('category_id') }}</span>
                    </div>

                    <div class="form-group">
                      <label for=""> Name</label>
                      <input type="text" name="sub_category_name" class="form-control" id="" placeholder="sub category name">
                      <span class="text-danger">{{ $errors->first('sub_category_name') }}</span>
                    </div>

                    <div class="form-group">
                      <label for=""> Value</label>
                      <input type="text" name="value" class="form-control" id="" placeholder="enter value">
                      <span class="text-danger">{{ $errors->first('value') }}</span>
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
                    
                  </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
    
  </section>
    
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
@endsection
