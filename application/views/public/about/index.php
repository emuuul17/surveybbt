
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


<section class="contact py-5 my-lg-5">
	<div class="container">
	<div class="row contact_information">
		<?php foreach($vmisi as $vm) : ?>
			<div class="col-md-6">
				<div class="mt-5 information">
					<div class="row">
						<div class="col-sm-2 mb-sm-0 mb-3">
							<i class="fas fa-comments"></i>
						</div>
			<div class="col-sm-10">
				<h3 class="heading text-left text-capitalize font-weight-bold mb-5"><?=$vm->judul?></h3>
				<p class="mt-sm-5 mt-3"><?=$vm->deskripsi?></p>
				</div>
				</div>
			</div>
		</div>
				<?php endforeach; ?>
</div>
</section>

<section class="contact py-5 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize font-weight-bold mb-5">NILAI-NILAI</h3>
		<div class="row contact_information">
        <?php foreach($nilai as $n) : ?>
			<div class="col-md-6">
				<div class="mt-5 information">
					<div class="row">
						<div class="col-sm-2 mb-sm-0 mb-3">
							<i class="fas fa-plus"></i>
						</div>
						<div class="col-sm-10">
							<h4 class="text-uppercase mb-4"><?=$n->judul?></h4>
							<p class="mb-3 text-capitalize"><?=$n->deskripsi?></p>
                            </div>
						</div>
					</div>
			</div>
            <?php endforeach; ?>
		</div>
</section>
 
<section class="about py-5 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize font-weight-bold mb-5">METHODOLOGY</h3>
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

<section class="about py-5 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize font-weight-bold mb-5">FILOSOFI</h3>
			<div class="spldishes-grids">
				<!-- Owl-Carousel -->
				<div id="owl-demo" class="owl-carousel agileinfo-gallery-row">
						<?php foreach($filo as $f) : ?>
						<h4 class="mt-4 text"><?=$f->judul?></h4>
						<?php endforeach; ?>
						</div>
					</div> 
			</div>  
			<div class="clearfix"> </div>
		</div>
	</div>
</section>

