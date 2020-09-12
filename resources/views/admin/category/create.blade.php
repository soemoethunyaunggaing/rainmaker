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
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
  <section class="content">
   
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Category</h3>
                  
                <a href="{{route('admin.categories.index')}}" class="back btn btn-primary btn-sm"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a>
                </div>
               
                <form action="{{route('admin.categories.store')}}" method="POST" autocomplete="off">
                  @csrf
                  <div class="card-body">
                      <div class="form-group">
                          <label for=""></label>
                          <select name="region_id" id="" class="form-control">
                              <option value="">Choose Region</option>
                              @foreach($regions as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                      <label for=""></label>
                      <input type="text" name="category_name" class="form-control" id="" placeholder="Category Name">
                      <span class="text-danger">{{ $errors->first('category_name') }}</span>
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
