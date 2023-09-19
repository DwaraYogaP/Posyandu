

@extends('layouts.default')


@section('title', 'Detail Balita')


@section('content')

<!-- CHART -->
<div class="row">
    <div class="col-xl-6 card mb-4 mt-5">
        <div class="card-header">
            <i class="fas fa-chart-area me-1"></i>
            Area Chart Balita
        </div>
        <div class="card-body"><canvas id="detailBalitaChart" width="100%" height="40"></canvas></div>
    </div>
</div>
<!-- END CHART -->

<div class="row">
    <div class="card mb-4 mt-5">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Balita
        </div>

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
                        <th>Lingkar Kepala</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id = $_GET['id'];
                    $api = file_get_contents("https://api.posyandu.niwabi.my.id/toddler/detail?toddler_id={$id}");
                                        
                    $json = json_decode($api, TRUE);

                    $dump = count($json['data']);
                    if($dump > 0) {
                        $no = 1;
                        for ($x = 0; $x < $dump; $x++) {
                        ?>  
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $json['data'][$x]['created_at']; ?></td>
                                <td><?php echo $json['data'][$x]['height']; ?></td>
                                <td><?php echo $json['data'][$x]['weight']; ?></td>
                                <td><?php echo $json['data'][$x]['head_size']; ?></td>
                                <td><?php echo $json['data'][$x]['notes']; ?></td>
                            </tr>
                        <?php 
                        $no++; }
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>


@section('javascript')
<script  type="text/javascript"> 
    let xValues = [
        <?php
            if($dump>0){
                for($x=0; $x<$dump; $x++){
                    echo '"'.$json['data'][$x]['created_at'].'",';
            }
        } ?>
    ];
    let yValues_headSize = [
        <?php 
            if($dump>0){
                for($x=0; $x<$dump; $x++){
                    echo '"'.$json['data'][$x]['head_size'].'",';
            }
        } ?>
    ];
    let yValues_height = [
        <?php 
            if($dump>0){
                for($x=0; $x<$dump; $x++){
                    echo '"'.$json['data'][$x]['height'].'",';
            }
        } ?>
    ];
    let yValues_weight = [
        <?php 
            if($dump>0){
                for($x=0; $x<$dump; $x++){
                    echo '"'.$json['data'][$x]['weight'].'",';
            }
        } ?>
    ];


    new Chart('detailBalitaChart', {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label : "Lingkar Kepala",
                backgroundColor :"rgba(0,0,255,1.0)",
                borderColor : 'rgb(255, 51, 51)',
                data : yValues_headSize,
                fill : false,
                tension : 0.1
            }, {
                label : "Tinggi Badan",
                backgroundColor :"rgba(0,0,255,1.0)",
                borderColor : 'rgb(0, 204, 0)',
                data : yValues_height,
                fill : false,
                tension : 0.1
            }, {
                label : "Berat Badan",
                backgroundColor :"rgba(0,0,255,1.0)",
                borderColor : 'rgb(75, 192, 192)',
                data : yValues_weight,
                fill : false,
                tension : 0.1
            }], 
        options:{}
    }
});
</script>
@endsection
@stop