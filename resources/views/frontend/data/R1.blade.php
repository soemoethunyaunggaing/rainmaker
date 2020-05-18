@extends('frontend.layouts.master')

@section('css')

	
    {{-- <link rel="stylesheet" href="{{asset('css/css/style.css')}}"> --}}
    {{-- <style>
        #container {
    height: 500px;
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 320px; 
  max-width: 700px;
  margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
 ?>
    </style> --}}
@endsection

@section('content')
{{-- <section class="header">
	
</section> --}}
	<div class="container" style="margin-top: 35px;">
    <div class="col-md-12">
        <form action="{{url('aa.dashboard')}}" method="post">
              @csrf
              <div class="col-md-3">
                 <div class="form-group">
                     
                      <select id="region"  name="region_id" class="form-control">
                          <option value="0">All Region</option>

                          <option value="1">ရန်ကုန်တိုင်းဒေသကြီး</option>
                          <option value="2">မန္တလေးတိုင်းဒေသကြီး</option>
                          <option value="3">ရှမ်းပြည်နယ်</option>
                          <option value="4">မွန်ပြည်နယ်</option>    
                          <option value="5">ရခိုင်ပြည်နယ်</option>    
                          <option value="6">ပဲခူးတိုင်းဒေသကြီး</option>    
                          <option value="7">ကယားပြည်နယ်</option>    
                          <option value="8">တနင်္သာရီတိုင်း ဒေသကြီး</option>    
                          <option value="9">ဧရာဝတီတိုင်း ဒေသကြီ</option>    
                          <option value="10">ကချင်ပြည်နယ်</option>    
                          <option value="11">ကရင်ပြည်နယ်</option>    
                          <option value="12">စစ်ကိုင်းတိုင်း ဒေသကြီ</option>    
                          <option value="13">မကွေးတိုင်းဒေသကြီ</option>    
                          <option value="14">နေပြည်တော်ကောင်စီ</option>    
                          <option value="15">ချင်းပြည်နယ်</option>    
                          
                      </select>
                 </div> 
              </div>
           
        </form>
		</div>  	
	</div>
   
    <div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5">
				
               
               
  

			</div>
			<div class="col-md-7 col-sm-7">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-12">
                    
                        <div id="container" style="height: 400px"></div>
                    </div>
                     <div class="col-md-6 col-sm-12">
                    
                        <div id="dd" style="height: 400px"></div>
                    </div>
                   
                </div>

                
				
			</div>
                
               
		</div>
	</div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <table class="table"  id="region">
                    <thead>
                                
                        <tr class="data_th">
                            <th>Region</th>
                            <th>Category</th>
                            <th>SubCategory</th>
                            <th>Name</th>
                            <th>Value</th>
                        </tr>
                           
                    </thead>
                    <tbody>
                      @foreach($alldata as $value)
                      <tr class="data_td">
                        <td>{{$value->region->region_name}}</td>
                        <td>{{$value->category->category_name}}</td>
                        <td>{{$value->subCategory->sub_category_name}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->value}}</td>
                        
                      </tr>
                      @endforeach
                      
                                
                    </tbody>
                </table>
                <div class="row mt-5">
                <div class="col text-center">
                  <div class="block-27">
                    <ul>
                     
                        {{$alldata->links()}}
                      
                    </ul>
                  </div>
                </div>
            </div> 
                
            </div>
        </div>
    </div>
@endsection
@section('script')
   {{--  <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/fastclick.js')}}"></script>
    <script>
    $(document).ready(function() {
      $('select:not(.ignore)').niceSelect();      
      FastClick.attach(document.body);
    });    
    </script> --}}
  
    <script src="{{asset('js/highcharts.js')}}"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <script>
        var options = {
            chart: {
                renderTo: 'container',
                defaultSeriesType: 'column',
              
            },
            
            title: {text: 'တိုင်းဒေသကြီးအားလုံး၏ဂျီပီဒီ'},
            xAxis: {categories: <?php echo json_encode($year) ?>,crosshair: true},
            yAxis: {min: 0,title: {text: ' (ကျပ်သန်း)'}},
            series: [{name: 'တိုင်းဒေသကြီးအားလုံး', data: [888,777,900]}]
            
        };
        var chart = new Highcharts.Chart(options);

        $("#region").on('change', function(){
          
            var selVal = $("#region").val();
            if(selVal == "1" || selVal == '')
            {   
                options.title= {text: 'ရန်ကုန်တိုင်းဒေသကြီး၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ရန်ကုန်တိုင်းဒေသကြီး', data: <?php echo json_encode($amount) ?>,}]
            }
            else if(selVal == "2")
            {   
                options.title= {text: 'မန္တလေးတိုင်းဒေသကြီး၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'မန္တလေးတိုင်းဒေသကြီး', data: <?php echo json_encode($amount) ?>,}]
               
            }
            else if(selVal == "3")
            {   
                options.title= {text: 'ရှမ်းပြည်နယ်၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ရှမ်းပြည်နယ်', data: <?php echo json_encode($amount) ?>,}]
               
            } 
            else if(selVal == "4")
            {   
                options.title= {text: 'မွန်ပြည်နယ်၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'မွန်ပြည်နယ်', data: <?php echo json_encode($amount) ?>,}]
               
            } 
            else if(selVal == "5")
            {   
                options.title= {text: 'ရခိုင်ပြည်နယ်၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ရခိုင်ပြည်နယ်', data: <?php echo json_encode($amount) ?>,}]
                
            }
            else if(selVal == "6")
            {   
                options.title= {text: 'ပဲခူးတိုင်းဒေသကြီး၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ပဲခူးတိုင်းဒေသကြီး', data: <?php echo json_encode($amount) ?>,}]
               
            }
            else if(selVal == "7")
            {   
                options.title= {text: 'ကယားပြည်နယ်၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ကယားပြည်နယ်', data: <?php echo json_encode($amount) ?>,}]
                
            }
            else if(selVal == "8")
            {   
                options.title= {text: 'တနင်္သာရီတိုင်းဒေသကြီး၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'တနင်္သာရီတိုင်းဒေသကြီး', data: <?php echo json_encode($amount) ?>,}]
                
            }
            else if(selVal == "9")
            {   
                options.title= {text: 'ဧရာဝတီတိုင်းဒေသကြီး၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ဧရာဝတီတိုင်းဒေသကြီး', data: <?php echo json_encode($amount) ?>,}]
                
            }
            else if(selVal == "10")
            {   
                options.title= {text: 'ကချင်ပြည်နယ်၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ကချင်ပြည်နယ်', data: <?php echo json_encode($amount) ?>,}]
                
            }
            else if(selVal == "11")
            {   
                options.title= {text: 'ကရင်ပြည်နယ်၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ကရင်ပြည်နယ်', data: <?php echo json_encode($amount) ?>,}]
                
            }
             else if(selVal == "12")
            {   
                options.title= {text: 'စစ်ကိုင်းတိုင်းဒေသကြီး၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'စစ်ကိုင်းတိုင်းဒေသကြီး', data: <?php echo json_encode($amount) ?>,}]
               
            }
             else if(selVal == "13")
            {   
                options.title= {text: 'မကွေးတိုင်းဒေသကြီး၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'မကွေးတိုင်းဒေသကြီး', data: <?php echo json_encode($amount) ?>,}]
                
            }
             else if(selVal == "14")
            {   
                options.title= {text: 'နေပြည်တော်ကောင်စီ၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'နေပြည်တော်ကောင်စီ', data: <?php echo json_encode($amount) ?>,}]
               
            }
             else if(selVal == "0")
            {   
                options.title= {text: 'တိုင်းဒေသကြီးအားလုံး၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'တိုင်းဒေသကြီးအားလုံး', data: <?php echo json_encode($amount) ?>,}]
               
            }
           
            else
            {   
                options.title= {text: 'ချင်းပြည်နယ်၏ဂျီပီဒီ'},
                options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
                options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
                options.series = [{name: 'ချင်းပြည်နယ်', data: <?php echo json_encode($amount) ?>,}]
               
            }  
            var chart = new Highcharts.Chart(options);    
        });

    </script>
    
    
    <script type="text/javascript">
      
      $(document).ready(function() {
        $('select[name="region_id"]').on('change', function() {
          var getid = $(this).val();
          if(getid) {
            $.ajax({
              url: '/aa/dashboard/data/' + getid,
              type: "GET",
              dataType: "json",

              success: function(data) {
                              
                            $('#region tbody').empty();
                            $('#region tbody').append('<tr></tr>');

                              $.each(data, function($key, $value) {

                                $('#region tbody').append('<tr style="text-align:center;">' +

                                 
                                  '<td>'+$value.region_name + '<td>' + $value.category_name +
                                  '<td>'+ $value.sub_category_name + '<td>' + $value.name +
                                  '<td>'+$value.value+
                                 

                                  '</tr>');
                            });
                              
                            },
                            
                        }); 
                  
                }
        });
        });

    </script>

    <script>
        Highcharts.chart('dd', {
              chart: {
                type: 'variablepie'
              },
              title: {
                text: ''
              },
              tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                  'Area (square km): <b>{point.y}</b><br/>' +
                  'Population density (people per square km): <b>{point.z}</b><br/>'
              },
              series: [{
                minPointSize: 10,
                innerSize: '50%',
                zMin: 0,
                name: 'countries',
                data: [{
                  name: 'Spain',
                  y: 505370,
                  z: 92.9
                }, {
                  name: 'France',
                  y: 551500,
                  z: 118.7
                }, {
                  name: 'Poland',
                  y: 312685,
                  z: 124.6
                }, {
                  name: 'Czech Republic',
                  y: 78867,
                  z: 137.5
                }, {
                  name: 'Italy',
                  y: 301340,
                  z: 201.8
                }, {
                  name: 'Switzerland',
                  y: 41277,
                  z: 214.5
                }, {
                  name: 'Germany',
                  y: 357022,
                  z: 235.6
                }]
              }]
            });
   
    </script>


    <script>
      Highcharts.chart('dd', {
    chart: {
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            ' <b>{point.y}</b><br/>' 
           
    },
     plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
        distance: -70,
        filter: {
          property: 'percentage',
          operator: '>',
          value: 4
        }
      }
    }
  },
    series: [{
        minPointSize: 10,
        innerSize: '50%',
        zMin: 0,
        name: 'countries',
        data: [{
            name: 'လယ်ယာကဏ္ဍကြီး',
            y: 505370,
            z: 92.9
        }, {
            name: 'သားငါးကဏ္ဍ',
            y: 551500,
            z: 118.7
        }, {
            name: 'သစ်တောကဏ္ဍ',
            y: 312685,
            z: 124.6
        }, {
            name: 'စွမ်းအင်ကဏ္ဍ',
            y: 78867,
            z: 137.5
        }, {
            name: 'သတ္တုနှင့်',
            y: 301340,
            z: 201.8
        }, {
            name: 'စက်မှုလက်မှုကဏ္ဍ',
            y: 41277,
            z: 214.5
        }, {
            name: 'စက်မှုလက်မှုကဏ္ဍ',
            y: 357022,
            z: 235.6
        }]
    }]
});
    </script>

@endsection