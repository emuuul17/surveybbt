<!-- //inner page banner-->
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>

<?php
$id1 =1;
$id2 =2;
$id3 =3;
$id4 =4;
$id5 =5;
$data1 = $this->Banner_model->get($id1);
$data2 = $this->Banner_model->get($id2);
$data3 = $this->Banner_model->get($id3);
$data4 = $this->Banner_model->get($id4);
$data5 = $this->Banner_model->get($id5);
?>
<!--/banner-->
<div class="banner_slide_bg">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="carousel-caption">
					<h3><?= $data1->title ?></h3>
					<h4 class="text-capitalize"><?= $data1->sub_title ?></h4>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4"><?= $data1->content ?></p>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="carousel-caption">
				<h3><?= $data2->title ?></h3>
					<h4 class="text-capitalize"><?= $data2->sub_title ?></h4>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4"><?= $data2->content ?></p>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="carousel-caption">
				<h3><?= $data3->title ?></h3>
					<h4 class="text-capitalize"><?= $data3->sub_title ?></h4>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4"><?= $data3->content ?></p>
					</div>
			</div>
			<div class="carousel-item item4">
				<div class="carousel-caption">
				<h3><?= $data4->title ?></h3>
					<h4 class="text-capitalize"><?= $data4->sub_title ?></h4>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4"><?= $data4->content ?></p>
					</div>
			</div>
			<div class="carousel-item item5">
				<div class="carousel-caption">
				<h3><?= $data5->title ?></h3>
					<h4 class="text-capitalize"><?= $data5->sub_title ?></h4>
					<p class="text-capitalize mt-3 mb-sm-5 mb-4"><?= $data5->content ?></p>
					</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!--//banner-->
