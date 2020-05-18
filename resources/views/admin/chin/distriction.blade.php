@extends('admin.layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="//github.com/downloads/lafeber/world-flags-sprite/flags32.css" />
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
              <li class="breadcrumb-item active"></li>
              <li class="breadcrumb-item active">Lists</li>
            </ol>
          </div>
        </div>
      </div>
  </section>
	<section class="content">
		<div class="container">
    		<div class="row justify-content-center">
			
				<div class="col-md-12">
					<div class="card">
                        <div class="card-header" style="background-color: #c9d9e5;">
                            
                               <div id="wrapper">
  <div id="container"></div>
  <div id="info">
    <span class="f32"><span id="flag"></span></span>
    <h2></h2>
    <div class="subheader">Click countries to view history</div>
    <div id="country-chart"></div>
  </div>
</div>

                                
                           
                        </div>
						<div class="card-body">
                            
                            <h5 style="text-align: center;color: #A378C9;">ချင်းပြည်နယ်၏ခရိုင်အလိုက်ဂျီဒီပီ</h5>
							<table class="table table-striped">
                                <thead>
                                    <tr style="background-color: #A378C9;color: #fff;">
                                        <th style="text-align: center;">ခရိုင်</th>
                                        <th style="text-align: center;">ကျပ်သန်းပေါင်း</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align: center;">
                                        <td>ဖလမ်းခရိုင်</td>
                                        <td>၁၅၉,၄၅၁</td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>ဟားခါးခရိုင်</td>
                                        <td>၁၂၄,၀၅၀</td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>မင်းတပ်ခရိုင်</td>
                                        <td>၂၀၇,၅၆၃</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr style="text-align: center;background-color: #A378C9;color: #fff;">
                                        <th>စုစုပေါင်း</th>
                                        <th>၄၉၁,၀၆၄</th>
                                    </tr>
                                </tfoot>
                                
              </table>
				  
						</div>
					</div>
					
				</div>
			</div>
		</div>

    </section>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/maps/modules/map.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>
<script src="{{asset('js/mm-all.js')}}"></script>




<script>
    $.ajax({
  url: '',
  success: function (csv) {

    // Parse the CSV Data
    /*Highcharts.data({
      csv: data,
      switchRowsAndColumns: true,
      parsed: function () {
        console.log(this.columns);
      }
    });*/

    // Very simple and case-specific CSV string splitting
    function CSVtoArray(text) {
      return text.replace(/^"/, '')
        .replace(/",$/, '')
        .split('","');
    }

    csv = csv.split(/\n/);

    var countries = {},
      mapChart,
      countryChart,
      numRegex = /^[0-9\.]+$/,
      lastCommaRegex = /,\s$/,
      quoteRegex = /\"/g,
      categories = CSVtoArray(csv[2]).slice(4);

    // Parse the CSV into arrays, one array each country
    $.each(csv.slice(3), function (j, line) {
      var row = CSVtoArray(line),
        data = row.slice(4);

      $.each(data, function (i, val) {
        val = val.replace(quoteRegex, '');
        if (numRegex.test(val)) {
          val = parseInt(val, 10);
        } else if (!val || lastCommaRegex.test(val)) {
          val = null;
        }
        data[i] = val;
      });

      countries[row[1]] = {
        name: row[0],
        code3: row[1],
        data: data
      };
    });

    // For each country, use the latest value for current population
    var data = [];
    for (var code3 in countries) {
      if (countries.hasOwnProperty(code3)) {
        var value = null,
          year,
          itemData = countries[code3].data,
          i = itemData.length;

        while (i--) {
          if (typeof itemData[i] === 'number') {
            value = itemData[i];
            year = categories[i];
            break;
          }
        }
        data.push({
          name: countries[code3].name,
          code3: code3,
          value: value,
          year: year
        });
      }
    }

    // Add lower case codes to the data set for inclusion in the tooltip.pointFormat
    var mapData = Highcharts.geojson(Highcharts.maps['custom/world']);
    $.each(mapData, function () {
      this.id = this.properties['hc-key']; // for Chart.get()
      this.flag = this.id.replace('UK', 'GB').toLowerCase();
    });

    // Wrap point.select to get to the total selected points
    Highcharts.wrap(Highcharts.Point.prototype, 'select', function (proceed) {

      proceed.apply(this, Array.prototype.slice.call(arguments, 1));

      var points = mapChart.getSelectedPoints();
      if (points.length) {
        if (points.length === 1) {
          $('#info #flag').attr('class', 'flag ' + points[0].flag);
          $('#info h2').html(points[0].name);
        } else {
          $('#info #flag').attr('class', 'flag');
          $('#info h2').html('Comparing countries');

        }
        $('#info .subheader').html('<h4>HELLO</h4>');

        if (!countryChart) {
          countryChart = Highcharts.chart('country-chart', {
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
                      '<td style="padding:0"><b>{point.y:.1f} m</b></td></tr>',
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
        }

        countryChart.series.slice(0).forEach(function (s) {
          s.remove(false);
        });
        points.forEach(function (p) {
          countryChart.addSeries({
            name: p.name,
            data: countries[p.code3].data,
            type: points.length > 1 ? 'line' : 'area'
          }, false);
        });
        countryChart.redraw();

      } else {
        $('#info #flag').attr('class', '');
        $('#info h2').html('');
        $('#info .subheader').html('');
        if (countryChart) {
          countryChart = countryChart.destroy();
        }
      }
    });

    // Initiate the map chart
    mapChart = Highcharts.mapChart('container', {

      title: {
        text: 'Population history by country'
      },

      subtitle: {
        text: 'GG'
      },

      mapNavigation: {
        enabled: true,
        buttonOptions: {
          verticalAlign: 'bottom'
        }
      },

      colorAxis: {
        type: 'logarithmic',
        endOnTick: false,
        startOnTick: false,
        min: 50000
      },

      tooltip: {
        footerFormat: '<span style="font-size: 10px">(Click for details)</span>'
      },

      series: [{
        data: data,
        mapData: mapData,
        joinBy: ['iso-a3', 'code3'],
        name: 'Current population',
        allowPointSelect: true,
        cursor: 'pointer',
        states: {
          select: {
            color: '#a4edba',
            borderColor: 'black',
            dashStyle: 'shortdot'
          }
        }
      }]
    });

    // Pre-select a country
    mapChart.get('mm').select();
  }
});


</script>
@endpush
