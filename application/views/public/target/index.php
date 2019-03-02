
<!-- About us -->
<section class="contact py-5 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize font-weight-bold mb-5">SASARAN</h3>
            <div class="row contact_information">
        <?php foreach($sasaran as $s) : ?>
			<div class="col-md-6">
				<div class="mt-5 information">
					<div class="row">
						<div class="col-sm-2 mb-sm-0 mb-3">
							<i class="fas fa-plus"></i>
						</div>
						<div class="col-sm-10">
							<h4 class="text-uppercase mb-4"><?=$s->judul?></h4>
                            <a href="">Read More</a>
                            </div>
						</div>
					</div>
			    </div>
            <?php endforeach; ?>
		</div>
</section>
			
<!-- //About us -->

