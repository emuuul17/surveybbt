
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
                    <div class="mr-10"><h5> <br><b><?= $jadwal ?> Jadwal Seminar </b></h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/schedule">
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
                        <div class="mr-10"><h5><br><b><?= $pendaftar ?> Pendaftar </b></h5></div>
                            </div>
                              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/register">
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
                        <div class="mr-10"><h5> <br><b><?= $produk ?> Produk </b></h5></div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/feature/product">
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
                        <div class="mr-10"><h5> <br><b><?= $servis ?> layanan </b></h5></div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>./admin/feature/service">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                </div>
             </div>

            </div>

        <div class="row col-md-12" style="margin-top: 2em">

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
            </div>

            <div class="col-md-3">
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
            </div>

            </div>
        </div>
    </div>
</div>

<!-- <?php foreach($activities as $activity) : ?>
    <?php $date = strtotime($activity->create_date); ?>
        <?php $formatted_date = date('F j, Y, g:i a', $date); ?>
    <li class="list-group-item"><strong><?= $activity->message; ?></strong> - <?= $formatted_date; ?></li>
<?php endforeach; ?> -->
