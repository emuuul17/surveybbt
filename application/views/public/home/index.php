
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

<!-- Testimonials -->
<!-- Section: Testimonials v.1 -->
<section class="text-center my-5 p-1">
  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Testimoni</h2>
  <!-- Section description -->
  <p class="dark-grey-text w-responsive mx-auto mb-5">Ini merupakan testimoni dari sebagian orang hehehe</p>
  <!-- Grid row -->
  <div class="row">
	  	 <!--Grid column-->
    <div class="col-lg-6 col-md-6 mb-lg-6 mb-4">
      <!--Card-->
      <div class="card testimonial-card">
        <!--Background color-->
		<div class="card-up info-color"></div>
		 <!--Avatar-->
        <div class="avatar mx-auto white">
		<?php foreach($testi as $tsti) : ?>
			  <img src="<?= base_url();?>/assets/upload/testi/<?= $tsti->img ?>" class="rounded-circle img-fluid">
        </div>
        <div class="card-body">
          <!--Name-->
          <h4 class="font-weight-bold mb-4"><?=$tsti->nama?></h4>
          <hr>
          <!--Quotation-->
		  <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i><?=$tsti->testimoni?></p>
		  
		  </div>
		  
	  </div>
	  <?php endforeach; ?>
      <!--Card-->
    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Testimonials v.1 -->

	<!-- project -->
<section class="project py-5 text-center">
	<div class="container">
		<h3 class="text-capitalize mb-5">BERGABUNG BERSAMA KAMI??</h3>
		<a href="<?php echo base_url();?>register" class="text-uppercase"><i></i>DAFTAR </a>
	</div>
</section>
<!-- //project -->
