
<section class="welcome py-5 my-lg-5">
	<div class="container">
		<div class="row welcome_grids">
			<div class="col-lg-7 mb-lg-0 mb-5">
				<h3 class="mb-9 text-capitalize">Welcome to Antawijaya</h3>
				<!-- foreach untuk perulanfan setiap isi variable tadi, abouts di ambil dari arry variable $data tadi -->
            	<?php foreach($tentang as $atc) : ?>
            		<!-- title dan deskripsi dari nama field yang ada di database -->
					<p class="my-2 initial font-italic"><?=$atc->judul?></p>
					<p class="mb-5 mt-4"><?=$atc->deskripsi?></p>
            	<?php endforeach; ?>
				</div>
			<div class="col-lg-5 welcome_right">
				<img src="<?php echo base_url();?>/assets/web/images/antawijaya.jpeg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<!-- History Owner -->
	<div class="container py-lg-5">
		<div class="row">
			<!-- Clients -->
			<div class=" col-lg-6 clients">
				<div class="slider p-sm-5 p-4">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="client row">
									<div class="col-sm-4">
                                    <?php foreach($owner as $ow) : ?>
										<img src="<?php echo base_url();?>/assets/web/images/coach.jpg" alt="" />
									</div>
									<div class="col-sm-8">
										<h5 class="my-2"><?=$ow->nama?></h5>
										<ul class="rating mt-2">
											<li class="mx-1"><span class="fas fa-star"></span></li>
											<li class="mx-1"><span class="fas fa-star"></span></li>
											<li class="mx-1"><span class="fas fa-star"></span></li>
											<li class="mx-1"><span class="fas fa-star"></span></li>
											<li class="mx-1"><span class="fas fa-star"></span></li>
										</ul>
									</div>
								</div>
								<p class="my-4"><?=$ow->gelar?></p>
								</li>
							</ul>
					</div>
			</div>
		</div>
			<!-- //Clients -->
			<div class="col-lg-6 mt-lg-0 mt-5 px-sm-5 px-4">
				<h3 class="mb-9 text-capitalize"><?=$ow->nama?></h3>
				<p class="mb-5 mt-4"><?=$ow->deskripsi?></p>
				</div>
            <?php endforeach; ?>
		</div>
	</div>
</section>
<!-- Testimonials -->
