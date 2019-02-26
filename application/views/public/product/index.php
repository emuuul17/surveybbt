<section class="contact py-5 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize font-weight-bold mb-5">PRODUK & JASA</h3>
		<div class="row contact_information">
        <?php foreach($produk as $pro) : ?>
			<div class="col-md-6">
				<div class="mt-5 information">
					<div class="row">
						<div class="col-sm-2 mb-sm-0 mb-3">
							<i class="fas fa-comments"></i>
						</div>
						<div class="col-sm-10">
							<h4 class="text-uppercase mb-4"><?= $pro->judul; ?></h4>
							<p class="mb-3 text-capitalize"><?= $pro->sub_judul; ?></p>
                            <p class="mb-3 text-capitalize"><?= $pro->deskripsi; ?></p>
                            </div>
						</div>
					</div>
			</div>
            <?php endforeach; ?>
		</div>
</section>
