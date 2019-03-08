<section class="section py-5">
<?php var_dump() ?>
<?php
    $i = 0;
    foreach($service as $serv) : $i++ ?>
    <?php if ($i %2 !=0 ) : ?>
    var_dump($variabel)
    <div class="container pt-3">
        <div class="row py-sm-5">
            <!-- blog grid -->
           <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header p-0">
                        <a href="<?php echo base_url();?>index.php/antawijaya/single">
                            <img class="card-img-bottom" src="<?php echo base_url();?>/assets/web/images/img1.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom py-2">
                <h2 class="blog-title card-title font-weight-bold"><?= $serv->judul; ?></h2>
                <h3> <?= $serv->sub_judul  ?></h3>
                <p class="my-15"><?= $serv->desk_1; ?></p>
                <p class="my-15"><?= $serv->desk__2; ?></p>
                <p class="my-15"><?= $serv->desk__3; ?></p>
                <p class="my-15"><?= $serv->desk__4; ?></p>
                <p class="my-15"><?= $serv->desk__5; ?></p>
                <p class="my-15"><?= $serv->desk__6; ?></p>
                <p class="my-15"><?= $serv->desk__7; ?></p>
                <p class="my-15"><?= $serv->desk__8; ?></p>
                <p class="my-15"><?= $serv->desk__9; ?></p>
                <p class="my-15"><?= $serv->desk__10; ?></p>
                <p class="my-15"><?= $serv->desk__11; ?></p>
                <p class="my-15"><?= $serv->desk__12; ?></p>
                <p class="my-15"><?= $serv->desk__13; ?></p>
                <p class="my-15"><?= $serv->desk__14; ?></p>
                <p class="my-15"><?= $serv->desk__15; ?></p>
                </div>
            <div class="col-lg-6 mt-lg-0 mt-5 img">
                <img src="<?= base_url();?>/assets/upload/feature/<?= $serv->img ?>" class="img-fluid" alt="Card image cap"/>
            </div>
        </div>
    </div>
</section>
<!-- //section -->
<?php endif;?>
<?php if ($i %2 == 0 ) : ?>
<!-- section -->
<section class="section py-5 bg-light">
<div class="container pt-3">
        <div class="row py-sm-5">
            <!-- blog grid -->
           <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header p-0">
                        <a href="<?php echo base_url();?>index.php/antawijaya/single">
                            <img class="card-img-bottom" src="<?php echo base_url();?>/assets/web/images/img1.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom py-2">
            <h2 class="blog-title card-title font-weight-bold"><?= $serv->judul ?></h2>
                <h3> <?= $serv->sub_judul  ?></h3>
                <h2 class="blog-title card-title font-weight-bold"><?= $serv->judul; ?></h2>
                <h3> <?= $serv->sub_judul  ?></h3>
                <p class="my-15"><?= $serv->desk_1; ?></p>
                <p class="my-15"><?= $serv->desk__2; ?></p>
                <p class="my-15"><?= $serv->desk__3; ?></p>
                <p class="my-15"><?= $serv->desk__4; ?></p>
                <p class="my-15"><?= $serv->desk__5; ?></p>
                <p class="my-15"><?= $serv->desk__6; ?></p>
                <p class="my-15"><?= $serv->desk__7; ?></p>
                <p class="my-15"><?= $serv->desk__8; ?></p>
                <p class="my-15"><?= $serv->desk__9; ?></p>
                <p class="my-15"><?= $serv->desk__10; ?></p>
                <p class="my-15"><?= $serv->desk__11; ?></p>
                <p class="my-15"><?= $serv->desk__12; ?></p>
                <p class="my-15"><?= $serv->desk__13; ?></p>
                <p class="my-15"><?= $serv->desk__14; ?></p>
                <p class="my-15"><?= $serv->desk__15; ?></p>
        </div>
    </div>
    <?php endif;?>
    <?php endforeach; ?>
    
</section>