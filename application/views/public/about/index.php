
<section class="welcome py-5 my-lg-5">
	<div class="container">
		<div class="row welcome_grids">
			<div class="col-lg-7 mb-lg-0 mb-5">
				<h3 class="mb-9 text-capitalize">Welcome to Antawijaya</h3>
				<!-- foreach untuk perulanfan setiap isi variable tadi, abouts di ambil dari arry variable $data tadi -->
            	<?php foreach($abouts as $atc) : ?>
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


<section class="process py-5 my-lg-5">
	<div class="container">
		<div class="row process-grids">
			<div class="col-lg-6 col-md-6 grid1">
				<span class="fab fa-digital-ocean"></span>
				<?php foreach($vmisi as $vm) : ?>
				<h3 class="text-uppercase mt-3"><?=$vm->judul?></h3>
				<p class="mt-sm-5 mt-3"><?=$vm->deskripsi?></p>
				<?php endforeach; ?>
				</div>
				</div>
</section>

<section class="help">
	<div class="layer py-5">
		<div class="container py-lg-5">
		<h3 class="heading text-center text-capitalize mb-5">NILAI-NILAI </h3>
			<div class="row help_grids">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-lg-3 mb-lg-0 mb-4 icon">
							<i class="fas fa-briefcase"></i>
						</div>
						<div class="col-lg-9">
						<?php foreach($nilai as $n) : ?>
							<h4 class="text-uppercase mb-3"><?=$n->judul?></h4>
							<p class="mt-sm-5 mt-3"><?=$n->deskripsi?></p>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about py-5 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize-bold mb-5">METHODOLOGY</h3>
			<div class="spldishes-grids">
				<!-- Owl-Carousel -->
				<div id="owl-demo" class="owl-carousel agileinfo-gallery-row">
						<?php foreach($metod as $m) : ?>
						<h4 class="mt-4 text"><?=$m->judul?></h4>
						<?php endforeach; ?>
						</div>
					
				</div> 
			</div>  
			<div class="clearfix"> </div>
		</div>
	</div>
</section>
<!-- //About us -->