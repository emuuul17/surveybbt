<!--gallery  -->
<section class="wthree-row w3-gallery py-sm-5 py-3" id="section3">
	<div class="container-fluid py-md-5 py-3 text-center">
	<h3 class="heading text-center text-capitalize mb-5">Partner Kami</h3>
		<ul class="portfolio-area clearfix">
		<?php foreach($customer as $f) : ?>
			<li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
				<div>
					<span class="image-block img-hover">
						<a class="image-zoom" href="<?php echo base_url();?>/assets/upload/partner/<?= $f->img ?>" data-gal="prettyPhoto[gallery]">
							<img src="<?php echo base_url();?>/assets/upload/partner/<?= $f->img ?>" class="img-fluid w3layouts agileits" alt="">
						</a>
					</span>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
		<!--end portfolio-area -->

	</div>
	<!-- //gallery container -->
</section>
<!-- //gallery -->
