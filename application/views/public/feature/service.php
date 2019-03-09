    <!-- blog -->
    <div class="container pt-3">
        <div class="row py-sm-5">
        <?php 
        $i = 0;
        foreach($service as $x) : $i++ ?>
        <?php if($i %2 != 0) : ?>
            <!-- blog grid -->
           <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header p-0">
                        <img class="card-img-bottom" src="<?= base_url();?>/assets/upload/feature/<?= $x->img ?>" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <div class="border-bottom py-2">
                            <h5 class="blog-title card-title font-weight-bold"><?= $x->judul ?></h5>
                        </div>
                        <div class="blog_w3icon pt-4">
                                <i class="fab fa-servicestack mr-2"></i><?= $x->sub_judul ?></span>
                        </div>
                        <p class="card-text mt-3">
                            <?php if(!empty($x->desk_1)) : ?>
                            <li> <?= $x->desk_1 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_2)) : ?>
                            <li> <?= $x->desk_2 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_3)) : ?>
                            <li> <?= $x->desk_3 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_4)) : ?>
                            <li> <?= $x->desk_4 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_5)) : ?>
                            <li> <?= $x->desk_5 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_6)) : ?>
                            <li> <?= $x->desk_6 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_7)) : ?>
                            <li> <?= $x->desk_7 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_8)) : ?>
                            <li> <?= $x->desk_8 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_9)) : ?>
                            <li> <?= $x->desk_9 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_10)) : ?>
                            <li> <?= $x->desk_10 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_11)) : ?>
                            <li> <?= $x->desk_11 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_12)) : ?>
                            <li> <?= $x->desk_12 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_13)) : ?>
                            <li> <?= $x->desk_13 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_14)) : ?>
                            <li> <?= $x->desk_14 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_15)) : ?>
                            <li> <?= $x->desk_15 ?></li>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
            <?php endif;?>
            <?php if ($i %2 == 0 ) : ?>
            <!-- blog grid -->
           <div class="col-lg-4 col-md-6 my-md-0 my-5">
                <div class="card">
                    <div class="card-header p-0">
                        <img class="card-img-bottom" src="<?= base_url();?>/assets/upload/feature/<?= $x->img ?>" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <div class="border-bottom py-2">
                            <h5 class="blog-title card-title font-weight-bold"><?= $x->judul ?></h5>
                        </div>
                        <div class="blog_w3icon pt-4">
                                <i class="fab fa-servicestack mr-2"></i><?= $x->sub_judul ?></span>
                        </div>
                        <p class="card-text mt-3">
                        <?php if(!empty($x->desk_1)) : ?>
                            <li> <?= $x->desk_1 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_2)) : ?>
                            <li> <?= $x->desk_2 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_3)) : ?>
                            <li> <?= $x->desk_3 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_4)) : ?>
                            <li> <?= $x->desk_4 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_5)) : ?>
                            <li> <?= $x->desk_5 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_6)) : ?>
                            <li> <?= $x->desk_6 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_7)) : ?>
                            <li> <?= $x->desk_7 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_8)) : ?>
                            <li> <?= $x->desk_8 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_9)) : ?>
                            <li> <?= $x->desk_9 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_10)) : ?>
                            <li> <?= $x->desk_10 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_11)) : ?>
                            <li> <?= $x->desk_11 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_12)) : ?>
                            <li> <?= $x->desk_12 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_13)) : ?>
                            <li> <?= $x->desk_13 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_14)) : ?>
                            <li> <?= $x->desk_14 ?></li>
                            <?php endif; ?>
                            <?php if(!empty($x->desk_15)) : ?>
                            <li> <?= $x->desk_15 ?></li>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endif;?>
    <?php endforeach; ?>
        </div>
    </div> 