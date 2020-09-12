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
              <li class="breadcrumb-item active">Lists</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
	<section class="content">
		<div class="container">
    		<div class="row justify-content-center">
			
				<div class="col-md-10">
					<div class="card">
						<div class="card-body">
							
				     <figure class="highcharts-figure">
				    <p class="highcharts-description">
				       
				    </p>
				    <div id="container"></div>
				</figure>
						</div>
					</div>
					
				</div>
			</div>
		</div>

    </section>
@endsection

@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
	Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'ချင်းပြည်နယ်၏ဂျီပီဒီ'
    },
    
    xAxis: {
        categories: [
            '၂၀၁၇-၂၀၁၈',
            '၂၀၁၈-၂၀၁၉',
            '၂၀၁၉-၂၀၂၀',
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ' (ကျပ်သန်း)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'chin',
        data: [ 4000000, 4800000,4900000]

    }]
});
</script>
<script>
    var options = {
        chart: {
            renderTo: 'container',
            defaultSeriesType: 'column',
          
    },
        series: [{name: 'A', data:[3,2,1,2,3] }]
    };
    var chart = new Highcharts.Chart(options);

    $("#region").on('change', function(){
      
        var selVal = $("#region").val();
        if(selVal == "MM-06" || selVal == '')
        {   
            options.title= {text: 'ချင်းပြည်နယ်၏ဂျီပီဒီ'},
            options.xAxis= {categories: <?php echo json_encode($year) ?>,crosshair: true},
            options.yAxis= {min: 0,title: {text: ' (ကျပ်သန်း)'}},
            options.series = [{name: 'ရန်ကုန်တိုင်းဒေသကြီး', data: <?php echo json_encode($value) ?>,}]
        }
        else if(selVal == "MM-04")
        {
            options.series = [{name: 'မန္တလေးတိုင်းဒေသကြီး', data: [3,2,1,2,3]}]
        }
        else if(selVal == "MM-17")
        {
            options.series = [{name: 'ရှမ်းပြည်နယ်', data: [5,4,8,7,6]}]
        } 
        else if(selVal == "MM-15")
        {
            options.series = [{name: 'မွန်ပြည်နယ်', data: [5,4,8,7,6]}]
        } 
        else if(selVal == "MM-16")
        {
            options.series = [{name: 'ရခိုင်ပြည်နယ်', data: [5,4,8,7,6]}]
        }
        else if(selVal == "MM-02")
        {
            options.series = [{name: 'ပဲခူးတိုင်းဒေသကြီး', data: [5,4,8,7,6]}]
        }
        else if(selVal == "MM-12")
        {
            options.series = [{name: 'ကယားပြည်နယ်', data: [5,4,8,7,6]}]
        }
        else if(selVal == "MM-05")
        {
            options.series = [{name: 'တနင်္သာရီတိုင်း ဒေသကြီး', data: [5,4,8,7,6]}]
        }
        else if(selVal == "MM-07")
        {
            options.series = [{name: 'ဧရာဝတီတိုင်း ဒေသကြီ', data: [5,4,8,7,6]}]
        }
        else if(selVal == "MM-11")
        {
            options.series = [{name: 'ကချင်ပြည်နယ်', data: [5,4,8,7,6]}]
        }
         else if(selVal == "MM-13")
        {
            options.series = [{name: 'ကရင်ပြည်နယ်', data: [5,4,8,7,6]}]
        }
         else if(selVal == "MM-01")
        {
            options.series = [{name: 'စစ်ကိုင်းတိုင်း ဒေသကြီး', data: [5,4,8,7,6]}]
        }
         else if(selVal == "MM-03")
        {
            options.series = [{name: 'မကွေးတိုင်းဒေသကြီး', data: [5,4,8,7,6]}]
        }
         else if(selVal == "MM-18")
        {
            options.series = [{name: 'နေပြည်တော်ကောင်စီ', data: [5,4,8,7,6]}]
        }
       
        else
        {   
            options.series = [{name: 'ချင်းပြည်နယ်', data: [4,7,9,6,2]}]
        }  
        var chart = new Highcharts.Chart(options);    
    });

</script>
{{-- <script type="text/javascript">
        $(function () {
                var processed_json = new Array();   
                $.getJSON('http://127.0.0.1:8000/api/apidata', function(data) {
                    // Populate series
                    for (i = 0; i < data.length; i++){
                        processed_json.push([data[i].key, data[i].value]);
                    }
                 
                    // draw chart
                    $('#container').highcharts({
                    chart: {
                        type: "column"
                    },
                    title: {
                        text: "Student data"
                    },
                    xAxis: {
                        type: 'category',
                        allowDecimals: false,
                        title: {
                            text: ""
                        }
                    },
                    yAxis: {
                        title: {
                            text: "Scores"
                        }
                    },
                    series: [{
                        name: 'Subjects',
                        data: processed_json
                    }]
                }); 
            });
        });
</script>
 --}}
@endpush
