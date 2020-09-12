@extends('frontend.layouts.master')
<style>
    @import 'https://code.highcharts.com/css/highcharts.css';

.highcharts-pie-series .highcharts-point {
    stroke: #EDE;
    stroke-width: 2px;
}
.highcharts-pie-series .highcharts-data-label-connector {
    stroke: silver;
    stroke-dasharray: 2, 2;
    stroke-width: 2px;
}

.highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 600px;
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
</style>

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

                     
                            <div class="row">
                              <div class="col-12 col-sm-12 col-lg-12">
                                <div class="card card-primary card-tabs">
                                  <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                      <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">သာမန်အသုံးစရိတ်</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">ငွေလုံးငွေရင်းအသုံးစရိတ်</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-aa" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">နှိုင်းယှဉ်ချက်</a>
                                      </li>
                                     
                                    </ul>
                                  </div>
                                  <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                      <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                           <figure class="highcharts-figure">
                                                <div id="aa"></div>
                                                <p class="highcharts-description">
                                                    <div class="col-md-12">
                                                        
                                                      <table class="table table-striped">
                                                        <thead>
                                                            <tr style="background-color: #A378C9;color: #fff;text-align: center;">
                                                                <th>အမျိုးအစား</th>
                                                                <th>ကျပ်သန်းပေါင်း</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr style="text-align: center;font-size: 14px;">
                                                                <td>ပြင်ဆင်ထိန်းသိမ်းစရိတ်</td>
                                                                <td>၁၅၅၁၃</td>
                                                            </tr>
                                                            <tr style="text-align: center;font-size: 14px;">
                                                                <td>လစာ၊စရိတ် ချီးမြှင့်ငွေစသည်များ</td>
                                                                <td>၁၃၈၄၇</td>
                                                            </tr><tr style="text-align: center;font-size: 14px;">
                                                                <td width="50%">ပစ္စည်းများဝယ်ယူခြင်း၊ဆောင်ရွက်ခြင်းတို့အတွက်ကုန်ကျစရိတ်နှင်လုပ်အားခ</td>
                                                                <td>၄၁၀၅</td>
                                                            </tr><tr style="text-align: center;font-size: 14px;">
                                                                <td>အရေးပေါ်ရန်ပုံငွေ</td>
                                                                <td>၁၀၀၀</td>
                                                            </tr><tr style="text-align: center;font-size: 14px;">
                                                                <td>ပြည်ထောင်စုလွှတ်တော်မှသတ်မှတ်ပေးသောရန်ပုံငွေ</td>
                                                                <td>၉၀၀</td>
                                                            </tr><tr style="text-align: center;font-size: 14px;">
                                                                <td>ဓါတ်ဆီ၊စက်ဆီ၊ချောဆီ</td>
                                                                <td>၈၉၈</td>
                                                            </tr><tr style="text-align: center;font-size: 14px;">
                                                                <td>ခရီးသွားလာစရိတ်</td>
                                                                <td>၅၄၉</td>
                                                            </tr><tr style="text-align: center;font-size: 14px;">
                                                                <td>ပညာရေးနှင့်လူမှုရေးအသုံးစရိတ်</td>
                                                                <td>၃၅၉</td>
                                                            </tr>
                                                            <tr style="text-align: center;font-size: 14px;">
                                                                <td>ဧည့်ခံကျွေးမွေးစရိတ်</td>
                                                                <td>၂၀၅</td>
                                                            </tr>
                                                            <tr style="text-align: center;font-size: 14px;">
                                                                <td>လုပ်ငန်းကုန်ကျစရိတ်</td>
                                                                <td>၁၀၅</td>
                                                            </tr>
                                                            <tr style="text-align: center;font-size: 14px;">
                                                                <td>အခြားသာမန်အသုံးစရိတ်များ</td>
                                                                <td>၁၂၃</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                        <tfoot>
                                                            <tr style="background-color: #A378C9;color: #fff;text-align: center;">
                                                                <th>စုစုပေါင်း</th>
                                                                <th>၃၇၆၀၄</th>
                                                            </tr>
                                                        </tfoot>
                                                          
                                                      </table>
                                                    </div>
                                                </p>
                                            </figure>

                                      </div>
                                      <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                            <figure class="highcharts-figure">
                                                <div id="bb"></div>
                                                <p class="highcharts-description">
                                                   
                                                </p>
                                            </figure> 
                                      </div>
                                       <div class="tab-pane fade" id="custom-tabs-one-aa" role="tabpanel" aria-labelledby="custom-tabs-one-aa-tab">
                                            <figure class="highcharts-figure">
                                                <div id="cc"></div>
                                                <p class="highcharts-description">
                                                   
                                                </p>
                                            </figure> 
                                      </div>
                                      
                                    </div>
                                  </div>
                                  <!-- /.card -->
                                </div>
                              </div>
                              
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
{{-- <script src="https://code.highcharts.com/modules/variable-pie.js"></script> --}}

<script>
	Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'ချင်းပြည်နယ်အသုံးစရိတ်များအပေါ်ရှင်းလင်ချက်'
    },
    subtitle: {
        text: '၂၀၁၆-၂၀၁၇ မှ ၂၀၁၉-၂၀၂၀ထိ၊ကျပ်သန်းပေါင်း'
    },
    xAxis: {
        categories: [
            '၂၀၁၆-၂၀၁၇',
            '၂၀၁၇-၂၀၁၈',
            '၂၀၁၈(၆လ)',
            '၂၀၁၈-၂၀၁၉',
            '၂၀၁၉-၂၀၂၀',
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
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
        name: 'သာမန်အသုံးစရိတ်',
        data: [32014, 28456, 16700, 35000, 37604]

    }, {
        name: 'ငွေလုံးငွေရင်းအသုံးစရိတ်',
        data: [110000, 120000, 40000, 112000,127228]

    }]
});
</script>

<script>
    Highcharts.chart('aa', {

    chart: {
        styledMode: true
    },

    title: {
        text: 'ချင်းပြည်နယ်၏သာမန်အသုံးစရိတ်များ'
    },
    subtitle: {
        text: '(အမျိုးအစားလိုက်၊ရာခိုင်နှုန်း)'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['ပြင်ဆင်ထိန်းသိမ်းစရိတ်(%)',11, false],
            ['လစာ၊စရိတ် ချီးမြှင့်ငွေစသည်များ(%)', 41, false],
            ['ပစ္စည်းများဝယ်ယူခြင်း၊ဆောင်ရွက်ခြင်းတို့အတွက်ကုန်ကျစရိတ်နှင်လုပ်အားခ(%)',37, false],
            ['အခြားသာမန်အသုံးစရိတ်(%)', 11, false],
           
        ],
        showInLegend: true
    }]
});
</script>
<script>
    Highcharts.chart('bb', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'ချင်းပြည်နယ်အသုံးစရိတ်များအပေါ်ရှင်းလင်ချက်'
    },
    subtitle: {
        text: '၂၀၁၆-၂၀၁၇ မှ ၂၀၁၉-၂၀၂၀ထိ၊ကျပ်သန်းပေါင်း'
    },
    xAxis: {
        categories: [
            '၂၀၁၆-၂၀၁၇',
            '၂၀၁၇-၂၀၁၈',
            '၂၀၁၈(၆လ)',
            '၂၀၁၈-၂၀၁၉',
            '၂၀၁၉-၂၀၂၀',
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
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
    series: [ {
        name: 'ငွေလုံးငွေရင်းအသုံးစရိတ်',
        data: [110000, 120000, 40000, 112000,127228]

    }]
});
</script>
<script>
    Highcharts.chart('cc', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Stacked bar chart'
    },
    xAxis: {
        categories: ['၂၀၁၉-၂၀၂၀', '၂၀၁၈-၂၀၁၉', '၂၀၁၈(၆လ)', '၂၀၁၇-၂၀၁၈', '၂၀၁၆-၂၀၁၇']
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'လမ်း၊တံတား',
        data: [5, 3, 4, 7, 2]
    }, {
        name: 'ဒေသဖွံ့ဖြိုးရေး',
        data: [2, 2, 3, 2, 1]
    }, {
        name: 'အဆောက်အဦ',
        data: [3, 4, 4, 2, 5]
    },{
       name: 'လျှပ်စစ်',
        data: [3, 4, 4, 2, 5] 
    },{
       name: 'ဆည်မြောင်း',
        data: [3, 4, 4, 2, 5] 
    },{
       name: 'ယာဉ်ဝယ်၊ယာဉ်ပြင်',
        data: [3, 4, 4, 2, 5] 
    },{
       name: 'ရုံးသုံးစက်ကိရိယာ၊ရုံးသုံးပရိဘောဂ',
        data: [3, 4, 4, 2, 5] 
    },
    {
       name: 'လယ်ယာ',
        data: [3, 4, 4, 2, 5] 
    }]
});
</script>

@endpush