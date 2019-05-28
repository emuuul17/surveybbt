<?php
  $id = 1;
  $data = $this->Settings_model->get($id);
?>
<style>
#mapid { 
	height: 20em;
	left: 10em;
	 }
</style>

<!-- footer -->	
<footer>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<h3 class="text-uppercase mb-3">Address</h3>

				<address>
					<p><strong><?= $data->title ?></strong></strong></p>
					<p class="mb-3"><?= $data->address ?></p>
					<p><strong>Phone</strong> : <?= $data->phone ?></p>
					<p><strong>Email</strong> : <a href="mailto:infom"><?= $data->email ?></a></p>
					<p><strong>Fax</strong> : <?= $data->fax ?></p>
				</address>
			</div>

			<div class="col-lg-6 col-md-6 mt-lg-0 mt-sm-0 mt-4 p-md-0">
							<!-- map -->
							<div class="col-md-7">
				<div id="mapid"></div>
				</div>
	<!--// map -->
				
			</div>

			<div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
				<h3 class="text-uppercase mb-3">Links</h3>
				<div class="links">
					<a class="pt-2 text-capitalize" <?= anchor('', 'Beranda', 'title="Beranda"');?> ><i class="fas fa-angle-right"></i> Beranda</a>
					<a class="pt-2 text-capitalize" <?= anchor('about', 'Tentang Kami', 'title="About Us"');?>><i class="fas fa-angle-right"></i> Visi-Misi</a>
					<a class="pt-2 text-capitalize" <?= anchor('feature', 'Produk & Jasa', 'title="Service & Products"');?>><i class="fas fa-angle-right"></i> Produk & Jasa</a>
					<a class="pt-2 text-capitalize" <?= anchor('contact', 'Kontak Kami', 'title="Contact Us"');?>><i class="fas fa-angle-right"></i>Kontak Kami</a>
				</div>	
				


			</div>
		</div>
	</div>
</footer>
<!-- footer -->

<!-- copyright -->
<div class="copyright py-4">
	<div class="container">
		<div class="copyrightgrids row">
			<div class="col-lg-6 col-12">
				<p>© 2019 Antawijaya Training & Consulting . All Rights Reserved </a></p>
			</div>
			<div class="col-lg-6 col-12">
				<ul class="social text-right mt-lg-0 mt-3">
					<li><p class="mx-2 text-capitalize">follow us on : </p></li>
					<li class="mx-2"><a href="<?= $data->facebook ?>"><span class="fab fa-facebook-f"></span></a></li>
					<li class="mx-2"><a href="<?= $data->twitter ?>"><span class="fab fa-twitter"></span></a></li>
					<li class="mx-2"><a href="<?= $data->linkedin ?>"><span class="fab fa-linkedin-in"></span></a></li>
					<li class="mx-2"><a href="<?= $data->instagram ?>"><span class="fab fa-instagram"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //copyright -->

<!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

</div>

<!-- //Vertically centered Modal -->
<script>
var mymap = L.map('mapid').setView([-6.9151596,107.6587686,17], 13);
var marker = L.marker([-6.9151596,107.6587686,17]).addTo(mymap);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1Ijoiem9lNjA2IiwiYSI6ImNqdzI4bHJ3bzB1N3c0OW9kYnlydWhyc3AifQ.qi01PI75ucqDNONhzkzR7Q'
}).addTo(mymap);

marker.bindPopup("<b>Antawijaya</b><br>Jl. Kuningan XI no.4 Antapani. Bandung").openPopup();

</script>
