

@extends('layouts.default')


@section('title', 'Balita')


@section('content')

<main class="p-4">
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
                        <th>Nama</th>
                        <th>Nama Orang Tua</th>
                        <th>Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $api = file_get_contents("https://api.posyandu.niwabi.my.id/toddler");

                        $json = json_decode($api, TRUE);
                        $dump = count($json['data']);
                        $id = $json['data'][0]['id'];
                        echo $id;

                        if($dump > 0) {
                            $no = 1;
                            for ($x = 0; $x < $dump; $x++) {
                            ?>  
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $json['data'][$x]['name']; ?></td>
                                    <td><?php echo $json['data'][$x]['parent_name']; ?></td>
                                    <td><?php echo $json['data'][$x]['date_of_birth']; ?></td>
                                    <?php $id = $json['data'][$x]['id']?>
                                    <td><a href="{{ url('balita/detail?id='.$id)}}">Lihat Detail</a></td>
                                </tr>
                            <?php 
                            $no++; }
                        }
                        
                    ?>
                </tbody>
            </table>
        </div>  
    </div>
</main>

@stop