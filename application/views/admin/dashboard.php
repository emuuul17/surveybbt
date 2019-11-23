
<div class="card">
    <div class="card-header text-white bg-primary">
     <h2 class="page-header">Dashboard</h2>
        </div>
  <div class="card-body">
    <div class="row col-md-12">

        <div class="col-md-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body row col-md-12">
                        <div class="card-body-icon">
                            <i class="'nav-link fas fa-table"></i>
                        </div>
                    <div class="mr-10"><h5> <br><b><?= $tb_responden ?> Jumlah Responden </b></h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/pelanggan">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                </div>
            </div>
                
            <div class="col-md-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body row col-md-12">
                        <div class="card-body-icon">
                            <i class="nav-link fas fa-registered"></i>
                            </div>
                        <div class="mr-10"><h5><br><b><?= $pelatihan1 ?> Responden Pelatihan  </b></h5></div>
                            </div>
                              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/hasil_survey/hasil_pelatihan">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body row col-md-12">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                            </div>
                        <div class="mr-10"><h5> <br><b><?= $pengujian1 ?>  Responden Pengujian </b></h5></div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/hasil_survey/hasil_pengujian">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body row col-md-12">
                        <div class="card-body-icon">
                            <i class="fab fa-servicestack"></i>
                            </div>
                        <div class="mr-10"><h5> <br><b><?= $rancang1 ?>  Responden Rancang </b></h5></div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/hasil_survey/rancang">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                </div>
             </div>

            </div>
            <?php
            $count1 = 0;
            $count2 = 0;
            $count3 = 0;
            $count4 = 0;
            $count5 = 0;

            $count6 = 0;
            $count7 = 0;
            $count8 = 0;
            $count9 = 0;
            $count10 = 0;

            $count11 = 0;
            $count12 = 0;
            $count13 = 0;
            $count14 = 0;
            $count15 = 0;

            $count16 = 0;
            $count17 = 0;
            $count18 = 0;
            $count19 = 0;
            $count20 = 0;

            $count21 = 0;
            $count22 = 0;
            $count23 = 0;
            $count24 = 0;
            $count25 = 0;

            $count26 = 0;
            $count27 = 0;
            $count28 = 0;
            $count29 = 0;
            $count30 = 0;

            $count31 = 0;
            $count32 = 0;
            $count33 = 0;
            $count34 = 0;
            $count35 = 0;

           
            $q1=[
               0 => $count1,
               1 => $count2,
               2 => $count3,
               3 => $count4,
               4 => $count5 
            ];
            $q2=[
                0 => $count6,
                1 => $count7,
                2 => $count8,
                3 => $count9,
                4 => $count10,
            ];
            $q3=[
                0 => $count11,
                1 => $count12,
                2 => $count13,
                3 => $count14,
                4 => $count15,
            ];
            $q4=[
                0 => $count16,
                1 => $count17,
                2 => $count18,
                3 => $count19,
                4 => $count20,
            ];
            $q5=[
                0 => $count21,
                1 => $count22,
                2 => $count23,
                3 => $count24,
                4 => $count25,
            ];
            $q6=[
                0 => $count26,
                1 => $count27,
                2 => $count28,
                3 => $count29,
                4 => $count30,
            ];
            $q7=[
                0 => $count31,
                1 => $count32,
                2 => $count33,
                3 => $count34,
                4 => $count35,
            ];
            // echo json_encode($laporan);die;
             foreach($laporan as $key){

                if($key['pertanyaan_1'] == 1){
                    $count1++;
                    $q1[0] = $count1;
                }if($key['pertanyaan_1'] == 2){
                    $count2++;
                    $q1[1] = $count2;
                }if($key['pertanyaan_1'] == 3){
                    $count3++;
                    $q1[2] = $count3;
                }if($key['pertanyaan_1'] == 4){
                    $count4++;
                    $q1[3] = $count4;
                }if($key['pertanyaan_1'] == 5){
                    $count5++;
                    $q1[4] = $count5;
                }

                if($key['pertanyaan_2'] == 1){
                    $count6++;
                    $q2[0] = $count6;
                }if($key['pertanyaan_2'] == 2){
                    $count7++;
                    $q2[1] = $count7;
                }if($key['pertanyaan_2'] == 3){
                    $count8++;
                    $q2[2] = $count8;
                }if($key['pertanyaan_2'] == 4){
                    $count9++;
                    $q2[3] = $count9;
                }if($key['pertanyaan_2'] == 5){
                    $count10++;
                    $q2[4] = $count10;
                }

                if($key['pertanyaan_3'] == 1){
                    $count11++;
                    $q3[0] = $count11;
                }if($key['pertanyaan_3'] == 2){
                    $count12++;
                    $q3[1] = $count12;
                }if($key['pertanyaan_3'] == 3){
                    $count13++;
                    $q3[2] = $count13;
                }if($key['pertanyaan_3'] == 4){
                    $count14++;
                    $q3[3] = $count14;
                }if($key['pertanyaan_3'] == 5){
                    $count15++;
                    $q3[4] = $count15;
                }

                if($key['pertanyaan_4'] == 1){
                    $count16++;
                    $q4[0] = $count16;
                }if($key['pertanyaan_4'] == 2){
                    $count17++;
                    $q4[1] = $count17;
                }if($key['pertanyaan_4'] == 3){
                    $count18++;
                    $q4[2] = $count18;
                }if($key['pertanyaan_4'] == 4){
                    $count19++;
                    $q4[3] = $count19;
                }if($key['pertanyaan_4'] == 5){
                    $count20++;
                    $q4[4] = $count20;
                }

                if($key['pertanyaan_5'] == 1){
                    $count21++;
                    $q5[0] = $count21;
                }if($key['pertanyaan_5'] == 2){
                    $count22++;
                    $q5[1] = $count22;
                }if($key['pertanyaan_5'] == 3){
                    $count23++;
                    $q5[2] = $count23;
                }if($key['pertanyaan_5'] == 4){
                    $count24++;
                    $q5[3] = $count24;
                }if($key['pertanyaan_5'] == 5){
                    $count25++;
                    $q5[4] = $count25;
                }

                if($key['pertanyaan_6'] == 1){
                    $count26++;
                    $q6[0] = $count26;
                }if($key['pertanyaan_6'] == 2){
                    $count27++;
                    $q6[1] = $count27;
                }if($key['pertanyaan_6'] == 3){
                    $count28++;
                    $q6[2] = $count28;
                }if($key['pertanyaan_6'] == 4){
                    $count29++;
                    $q6[3] = $count29;
                }if($key['pertanyaan_6'] == 5){
                    $count30++;
                    $q6[4] = $count30;
                }

                if($key['pertanyaan_7'] == 1){
                    $count31++;
                    $q7[0] = $count31;
                }if($key['pertanyaan_7'] == 2){
                    $count32++;
                    $q7[1] = $count32;
                }if($key['pertanyaan_7'] == 3){
                    $count33++;
                    $q7[2] = $count33;
                }if($key['pertanyaan_7'] == 4){
                    $count34++;
                    $q7[3] = $count34;
                }if($key['pertanyaan_7'] == 5){
                    $count35++;
                    $q7[4] = $count35;
                }
            }
                        
            ?>

            <div class="card-body table-responsive table-hover">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <tr>
                    <th>Jenis</th>
                    <th>Rata - Rata</th>
                    <th>Nilai Akhir</th>
                    <th>Kesimpulan</th>
                </tr>
                <tr>
                    <td><?= $laporan_pengujian['jenis'] ?></td>
                    <td><?= $laporan_pengujian['nilai'] ?></td>
                    <td><?= $laporan_pengujian['akhir'] ?></td>
                    <td><?= $laporan_pengujian['keterangan'] ?></td>
                </tr>
                <tr>
                    <td><?= $laporan_pelatihan['jenis'] ?></td>
                    <td><?= $laporan_pelatihan['nilai'] ?></td>
                    <td><?= $laporan_pelatihan['akhir'] ?></td>
                    <td><?= $laporan_pelatihan['keterangan'] ?></td>
                </tr>
                <tr>
                    <td><?= $laporan_rancang['jenis'] ?></td>
                    <td><?= $laporan_rancang['nilai'] ?></td>
                    <td><?= $laporan_rancang['akhir'] ?></td>
                    <td><?= $laporan_rancang['keterangan'] ?></td>
                </tr>
                </table>
        </div>
            <div class="row">  
            <div class="col-md-6">
                <canvas id="myChart" width="720" height="480"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart2" width="720" height="480"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart3" width="720" height="480"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart4" width="720" height="480"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart5" width="720" height="480"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart6" width="720" height="480"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="myChart7" width="720" height="480"></canvas>
            </div>
            </div>

        <!-- <div class="row col-md-12" style="margin-top: 2em">

            <div class="col-md-3">
                <div class="card text-white bg-secondary o-hidden h-100">
                    <div class="card-body row col-md-12">
                        <div class="card-body-icon">
                            <i class="nav-link fas fa-user"></i>
                            </div>
                        <div class="mr-10"><h5><br><b><?= $partner ?> Partner </b></h5></div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/customer">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                </div>
            </div> -->

            <!-- <div class="col-md-3">
                <div class="card text-white bg-info o-hidden h-100">
                    <div class="card-body row col-md-12">
                        <div class="card-body-icon">
                            <i class="fas fa-camera"></i>
                            </div>
                        <div class="mr-10"><h5> <br><b><?= $foto ?> Foto Kegiatan </b></h5></div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/about/kegiatan">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                </div>
            </div> -->

            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Tidak Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [{
                label: 'Pertanyaan 1',
                data: <?= json_encode($q1); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx2 = document.getElementById('myChart2');
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Tidak Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [{
                label: 'Pertanyaan 2',
                data: <?= json_encode($q2); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx3 = document.getElementById('myChart3');
    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ['Tidak Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [{
                label: 'Pertanyaan 3',
                data: <?= json_encode($q3); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx4 = document.getElementById('myChart4');
    var myChart4 = new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: ['Tidak Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [{
                label: 'Pertanyaan 4',
                data: <?= json_encode($q4); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx5 = document.getElementById('myChart5');
    var myChart5 = new Chart(ctx5, {
        type: 'bar',
        data: {
            labels: ['Tidak Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [{
                label: 'Pertanyaan 5',
                data: <?= json_encode($q5); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx6 = document.getElementById('myChart6');
    var myChart6 = new Chart(ctx6, {
        type: 'bar',
        data: {
            labels: ['Tidak Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [{
                label: 'Pertanyaan 6',
                data: <?= json_encode($q6); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx7 = document.getElementById('myChart7');
    var myChart7 = new Chart(ctx7, {
        type: 'bar',
        data: {
            labels: ['Tidak Puas', 'Kurang Puas', 'Cukup Puas', 'Puas', 'Sangat Puas'],
            datasets: [{
                label: 'Pertanyaan 7',
                data: <?= json_encode($q7); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>