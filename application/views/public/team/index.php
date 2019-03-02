<!-- team -->
<section class="contact py-5 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize font-weight-bold mb-5">TIM KAMI</h3>
		<div class="row contact_information">
        <?php foreach($team as $t) : ?>
			<div class="col-md-6">
				<div class="mt-5 information">
					<div class="row">
						<div class="col-sm-2 mb-sm-0 mb-3">
							<i class="fas fa-plus"></i>
						</div>
						<div class="col-sm-10">
							<h4 class="text-uppercase mb-4"><?=$t->nama?></h4>
							<p class="mb-3 text-capitalize"><?=$t->jabatan?></p>
                            </div>
						</div>
					</div>
			</div>
            <?php endforeach; ?>
		</div>
</section>
