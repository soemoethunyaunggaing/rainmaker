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
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">
   
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Region</h3>
                  
                <a href="{{route('admin.regions.index')}}" class="back btn btn-primary btn-sm"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a>
                </div>
               
                <form action="{{route('admin.regions.store')}}" method="POST" autocomplete="off">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      {{-- <label for="">Region Name</label> --}}
                      <input type="text" name="region_name" class="form-control" id="" placeholder="Region Name">
                      <span class="text-danger">{{ $errors->first('region_name') }}</span>
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
