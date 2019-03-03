<section class="section py-5">
<?php
    $i = 0;
    foreach($product as $produk) : $i++ ?>
    <?php if ($i %2 !=0 ) : ?>
    <div class="container py-md-0">
        <div class="row section_grids">
            <div class="col-lg-6">
                <h2 class="blog-title card-title font-weight-bold"><?= $produk->judul; ?></h2>
                <h3> <?= $produk->sub_judul  ?></h3>
                <p class="my-15"><?= $produk->deskripsi; ?></p>
                <p class="my-3"></p><h3><?= $produk->sub_judul_2; ?></h3>
                <p class="my-15"><?= $produk->deskripsi_2; ?></p>
                <p class="my-3"></p><h3><?= $produk->sub_judul_3; ?></h3>
                <p class="my-15"><?= $produk->deskripsi_3; ?></p>
                </div>
            <div class="col-lg-6 mt-lg-0 mt-5 img">
                <img src="<?= base_url();?>/assets/upload/feature/<?= $produk->img ?>" class="img-fluid" alt="Card image cap"/>
            </div>
        </div>
    </div>
</section>
<!-- //section -->
<?php endif;?>
<?php if ($i %2 == 0 ) : ?>
<!-- section -->
<section class="section py-5 bg-light">
    <div class="container py-md-5">
        <div class="row section_grids">
            <div class="col-lg-6">
                <img src="<?= base_url();?>/assets/upload/feature/<?= $produk->img ?>" class="img-fluid" alt="card image cap"/>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
            <h2 class="blog-title card-title font-weight-bold"><?= $produk->judul ?></h2>
                <h3> <?= $produk->sub_judul  ?></h3>
                    <p class="my-15"><?= $produk->deskripsi; ?></p>
                    <p class="my-3"></p><h3><?= $produk->sub_judul_2; ?></h3>
                    <p class="my-15"><?= $produk->deskripsi_2; ?></p>
                    <p class="my-3"></p><h3><?= $produk->sub_judul_3; ?></h3>
                    <p class="my-15"><?= $produk->deskripsi_3; ?></p>
            </div>
        </div>
    </div>
    <?php endif;?>
    <?php endforeach; ?>
</section>
