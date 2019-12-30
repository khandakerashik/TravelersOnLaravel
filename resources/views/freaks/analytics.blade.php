@extends('freaks.layout')
  @section('content')
  
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Analytics</h1>
        </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <a href="{{route('freaks.report')}}"><button class="btn btn-lg btn-block my-4"><strong>Report</strong></button></a>
      
      <canvas id="pieChart"></canvas>

      

        <script>
        var ctxP = document.getElementById("pieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
        labels: ["Post Blog", "Comment", "Delete Blog", "Report", "Total cost ৳"],
        datasets: [{
        data: [{{$p}}, {{$c}},{{$d}}, {{$r}}, {{$cost}}],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
        },
        options: {
        responsive: true
        }
        });
        </script>


            
    </main>
 @endsection

@section('title')
Analytics
@endsection