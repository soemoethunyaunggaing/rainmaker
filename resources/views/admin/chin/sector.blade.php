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
                 <div class="row">
          <div class="col-12 col-sm-6 col-lg-12">
            
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="background-color: #69b6f4;color: #fff;">လယ်ယာကဏ္ဍကြီး</th>
                                <th style="color:#69b6f4; ">တန်းဖိုး(ကျပ်သန်းပေါင်း)</th>
                                <th style="color:#69b6f4; ">စုစုပေါင်းဂျီဒီပိပါဝင်မှု%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color:#69b6f4; ">လယ်ယာကဏ္ဍ</td>
                                <td>၄၇၀၇၂</td>
                                <td>၉.၆%</td>
                            </tr>
                            <tr>
                                <td style="color:#69b6f4; ">သားငါးကဏ္ဍ</td>
                                <td>၁၀၆၉၁၅</td>
                                <td>၂၁.၈%</td>
                            </tr>
                             <tr>
                                <td style="color:#69b6f4; ">သစ်တောကဏ္ဍ</td>
                                <td>၁၂၃၆</td>
                                <td>၀.၃%</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                            <tr>
                                <th style="background-color: #69b6f4;color: #fff;">စက်မှုကဏ္ဍကြီး</th>
                                <th style="color:#69b6f4; ">တန်းဖိုး(ကျပ်သန်းပေါင်း)</th>
                                <th style="color:#69b6f4; ">စုစုပေါင်းဂျီဒီပိပါဝင်မှု%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color:#69b6f4; ">စွမ်းအင်ကဏ္ဍ</td>
                                <td></td>
                                <td><td>
                            </tr>
                            <tr>
                                <td style="color:#69b6f4; ">သတ္တုနှင့်တွင်းထွက်ပစ္စည်းကဏ္ဍ</td>
                                <td>၂၂၄၈</td>
                                <td>၀.၅%</td>
                            </tr>
                             <tr>
                                <td style="color:#69b6f4; ">စက်မှုလက်မှုကဏ္ဍ</td>
                                <td>၁၈၁၃၆</td>
                                <td>၃.၇%</td>
                            </tr>
                             <tr>
                                <td style="color:#69b6f4; ">လျှပ်စစ်ဓာတ်အားကဏ္ဍ</td>
                                <td>၂၁၇၀</td>
                                <td>၀.၄%</td>
                            </tr>
                             <tr>
                                <td style="color:#69b6f4; ">ဆောက်လုပ်မှုကဏ္ဍ</td>
                                <td>၁၇၀၅၈၀</td>
                                <td>၃၄.၆%</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="background-color: #69b6f4;color: #fff;">၀န်ဆောင်မှုကဏ္ဍကြီး</th>
                                <th style="color:#69b6f4; ">တန်းဖိုး(ကျပ်သန်းပေါင်း)</th>
                                <th style="color:#69b6f4; ">စုစုပေါင်းဂျီဒီပိပါဝင်မှု%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color:#69b6f4; ">ပို့ဆောင်ရေးကဏ္ဍ</td>
                                <td>၆၁၅၂</td>
                                <td>၉.၆%</td>
                            </tr>
                            <tr>
                                <td style="color:#69b6f4; ">ဆက်သွယ်ရေးကဏ္ဍ</td>
                                <td>၉၀၇၂</td>
                                <td>၁.၈%</td>
                            </tr>
                             <tr>
                                <td style="color:#69b6f4; ">ငွေရေးကြေးရေးကဏ္ဍ</td>
                                <td>၃၃၉</td>
                                <td>၀.၁%</td>
                            </tr>
                             <tr>
                                <td style="color:#69b6f4; ">လူမှုရေးနှင့်စီမံခန့်ခွဲရေးကဏ္ဍ</td>
                                <td>၄၅၄၅၈</td>
                                <td>၉.၃%</td>
                            </tr>
                             <tr>
                                <td style="color:#69b6f4; ">ဌားရမ်းခနှင့်အခြားဝန်ဆောင်မှုကဏ္ဍ</td>
                                <td>၁၁၁၃၈</td>
                                <td>၂.၃%</td>
                            </tr>
                              <tr>
                                <td style="color:#69b6f4; ">ကုန်သွယ်မှုကဏ္ဍ</td>
                                <td>၇၀၅၅၂</td>
                                <td>၁၄.၃%</td>
                            </tr>
                        </tbody>
                    </table>
                     
                  </div>
                  
                 
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          
              <!-- /.card -->
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
        type: 'bar'
    },
    title: {
        text: 'ချင်းပြည်နယ်၏ဂျီဒီပီကဏ္ဍကြီးအလိုက်ပါဝင်မှု(ကျပ်သန်းပေါင်း)',

    },
    xAxis: {
        categories: ['စက်မှုကဏ္ဍကြီး', 'လယ်ယာကဏ္ဍကြီး', '၀န်ဆောင်မှုကဏ္ဍကြီး',]
    },
    yAxis: {
        min: 0,
        title: {
            text: 'ကျပ်သန်း'
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
        name: 'sector',
        data: [193130, 155223, 142711,]
    }]
});
</script>

@endpush