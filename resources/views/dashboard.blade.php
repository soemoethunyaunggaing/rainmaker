@extends('admin.layouts.master')

@section('css')
  

@endsection

@section('content')    
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item active">All Lists</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

   
    <section class="content">
      <!-- Small boxes (Stat box) -->
       
          <div class="card">
            <div class="card-header">
              <div class="row">
              
                <div class="col-lg-6 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                    <div id="shiva"><span class="count"><h3></h3></span></div>

                      <p>Total Investments</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-6 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                    <div id="shiva"><span class="count"><h3></h3></span></div>

                      <p>Sub Data Categories</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

            </div>


        
          </div>
      </div>
    </section>    
  
@endsection
@section('script')



@endsection 



