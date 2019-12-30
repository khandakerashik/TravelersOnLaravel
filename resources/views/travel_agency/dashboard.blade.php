@extends('travel_agency.layout')
  @section('content')

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      

  <script>
		window.onload = function () {

		var chart = new CanvasJS.Chart("chartContainer", {
			theme: "light1",
			animationEnabled: false,		
			title:{
				text: "Total Events Month Wise"
			},
			data: [
			{
				type: "column",
				dataPoints: [
					{ label: "December",  y: 3  },
					{ label: "January", y:  2  },
					{ label: "February", y:  0  },
					{ label: "March",  y:  0 },
					{ label: "April",  y: 0  }
					
				]
			}
			]
		});
		chart.render();

	}
</script>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Dashboard</h1>
        </div>
      </div>

    
<div id="chartContainer" style="height: 370px; width: 100%;"></div>

    </main>
  @endsection

@section('title')
Dashboard
@endsection