<?php
  $id = 1;
  $data = $this->Settings_model->get($id);
?>

<!-- footer -->	
<footer>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<h3 class="text-uppercase mb-3">Address</h3>

				<address>
					<p><strong><?= $data->title ?></strong></strong></p>
					<p class="mb-3"><?= $data->address ?></p>
					<p><strong>Phone</strong> : <?= $data->phone ?></p>
					<p><strong>Email</strong> : <a href="mailto:infom"><?= $data->email ?></a></p>
					<p><strong>Fax</strong> : <?= $data->fax ?></p>
				</address>
			</div>
			<div class="col-lg-2 col-md-6 mt-lg-0 mt-sm-0 mt-4 p-md-0">
				<h3 class="text-uppercase mb-3"></h3>
				
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-4">
				<h3 class="text-uppercase mb-3">Links</h3>
				<div class="links">
					<a class="pt-2 text-capitalize" href="<?php echo base_url();?>index.php/antawijaya/"><i class="fas fa-angle-right"></i> Beranda</a>
					<a class="pt-2 text-capitalize" href="<?php echo base_url();?>index.php/antawijaya/visimisi"><i class="fas fa-angle-right"></i> Visi-Misi</a>
					<a class="pt-2 text-capitalize" href="<?php echo base_url();?>index.php/antawijaya/produk"><i class="fas fa-angle-right"></i> Produk & Jasa</a>
					<a class="pt-2 text-capitalize" href="<?php echo base_url();?>index.php/antawijaya/kontak"><i class="fas fa-angle-right"></i>Kontak Kami</a>
				</div>	
				<!-- map -->
				<div class="map pt-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.5588531024528!2d6.926104315807983!3d50.950370979547415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bf25139c136161%3A0x40466a2b892ec6e7!2sCologne%2C+Ehrenfeld+Gutenbergstr.!5e0!3m2!1sen!2sin!4v1516624585853"></iframe>
				</div>
	<!--// map -->
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
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"> Career Corp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<img src="<?php echo base_url();?>assets/images/banner.jpg" class="img-fluid mb-3" alt="Modal Image" />
        Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- //Vertically centered Modal -->