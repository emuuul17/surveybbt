
<section class="welcome py-5 my-lg-5">
	<div class="container">
		<div class="row welcome_grids">
			<div class="col-lg-7 mb-lg-0 mb-5">
				<h3 class="mb-9 text-capitalize">Welcome to Antawijaya</h3>
				<!-- foreach untuk perulanfan setiap isi variable tadi, abouts di ambil dari arry variable $data tadi -->
            	<?php foreach($tentang as $atc) : ?>
            		<!-- title dan deskripsi dari nama field yang ada di database -->
					<p class="my-2 initial font-italic"><?=$atc->judul?></p>
					<p class="mb-5 mt-4" align="justify"><?=$atc->deskripsi?></p>
				</div>
			<div class="col-lg-5">
				<img src="<?php echo base_url();?>/assets/upload/welcome/<?= $atc->img ?>" alt="" class="img-fluid">
			</div>
			<?php endforeach; ?>
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
										<img src="<?php echo base_url();?>/assets/upload/owner/<?= $ow->img ?>" alt="" />
									</div>
									<div class="col-sm-8">
										<h5 class="my-2"><?=$ow->nama?></h5>
									</div>
								</div>
								<p class="my-4" align="justify"><?=$ow->gelar?></p>
								</li>
							</ul>
					</div>
			</div>
		</div>
			<!-- //Clients -->
			<div class="col-lg-6 mt-lg-0 mt-5 px-sm-5 px-4">
				<h3 class="mb-9 text-capitalize"><?=$ow->nama?></h3>
				<p class="mb-5 mt-4" align="justify"><?=$ow->deskripsi?></p>
                <?php endforeach; ?>
				</div>
	</div>
</section>

<!-- testimonials -->
<section class="feedback" id="testimonials">
	<div class="feedback-layer py-5">
		<div class="container py-lg-5">
		<h3 class="heading text-center mb-sm-5 mb-4">TESTIMONI</h3>
			<div class="row">
			<?php foreach($testi as $tsti) : ?>
				<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
					<div class="feedback-info">
						<div class="feedback-top p-4">
							<span class="fa fa-quote-right"></span> 
								<p><?=$tsti->testimoni?></p>
							<div class="clearfix"></div>
						</div>
						<div class="feedback-grids">
							<div class="feedback-img">
								<img src="<?= base_url();?>/assets/upload/testi/<?= $tsti->img ?> class="img-fluid" alt="">
							</div>
							<div class="feedback-img-info">
								<h5><?=$tsti->nama?></h5>
								<p><?=$tsti->sub_nama?></p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					</div>
					<?php endforeach; ?>
</div>
</section>
<!-- //testimonials -->

<!-- project -->
<section class="project py-5 text-center">
	<div class="container">
		<h3 class="text-capitalize mb-5">BERGABUNG BERSAMA KAMI??</h3>
		<a href="<?php echo base_url();?>register" class="text-uppercase"><i></i>DAFTAR </a>
	</div>
</section>
<!-- //project -->
