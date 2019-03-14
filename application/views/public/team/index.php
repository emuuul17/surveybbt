<div class="banner-bottom py-5 my-lg-5">
	<div class="container">
	<h3 class="heading text-center text-capitalize font-weight-bold mb-5">TIM KAMI</h3>

		<div class="row w3_testimonials_grids">
		<?php foreach($team as $t) : ?>
			<div class="col-md-3 col-sm-6 text-center w3layouts_team_grid">
				<div class="agileits_grid w3_team_grid1">
					<figure class="effect-layla">
						<img src="<?= base_url();?>/assets/upload/tim/<?= $t->img ?>" alt=" " class="img-responsive" />
						<figcaption>
							<ul class="agileits_social_list">
								<li><a href="<?= $t->linkedin ?>" class="w3_agile_facebook"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="<?= $t->twitter ?>" class="agile_twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="<?= $t->website ?>" class="w3_agile_dribble"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
							</ul>
						</figcaption>			
					</figure>
				</div>
				<h4 class="mb-2"><?=$t->nama?></h4>
				<p><?=$t->jabatan?></p><br><br><br>
			</div>
			<?php endforeach; ?>
</div>
</div>
</div>
