@extends('layout.adminlte');

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Table</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Table</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <div class="info-box-content">

            <form method="GET" action="/periodes">
              <label>Select Periode</label><br>
              <input type="date" name="periodes" class="from-control">
              <button class="button ml-2" type="submit">Submit</button>
            </form>

          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <form>
              <label>Status:</label><br>
              <label>Periode:</label><br>
              <label>Devices:</label>  
            </form>
        </div>
      </div>

    </div>


    <div class="card card-info">
        <div class="card-header">
        <h3 class="card-title">Line Chart</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
        <div class="chart">
            <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                @foreach($data as $item)
                    '{{ $item->datetime }}',
                @endforeach
            ],
            datasets: [{
                label: 'Value 1',
                data: [
                    @foreach($data as $item)
                        '{{ $item->value_1 }}',
                    @endforeach
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }, {
                label: 'Value 2',
                data: [
                    @foreach($data as $item)
                        '{{ $item->value_2 }}',
                    @endforeach
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection();