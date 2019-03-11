<!-- Welcome -->
<section class="welcome py-5 my-lg-5">
	<div class="container">
		<div class="row welcome_grids">
			<div class="col-lg-12 mb-lg-0 mb-5">
                <h3 class="mb-3 text-capitalize text-center"><?= $item->judul ?></h3>
                <div class="col-lg-12 text-center">
				<img src="<?= base_url();?>/assets/upload/target/<?= $item->img ?>" alt="default.jpg" class="img-fluid" style="max-width: 70%">
			</div>
				<p class="mb-3 mt-3 text-justify"><?= $item->deskripsi  ?></p>
				</div>
			
		</div>
	</div>
</section>
<!-- //Welcome -->