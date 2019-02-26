<section class="section py-5">
    <div class="container py-md-0">
        <div class="row section_grids">
            <div class="col-lg-6">
                <h2 class="blog-title card-title font-weight-bold">Seminar & Workshop</h2>
                <h3> Business Owner Summit</h3>
                <p class="my-15">Business Owner Summit adalah seminar satu hari dimana satu atau dua orang expert akan membagikan informasi-informasi penting yang berhubungan dengan sebuah topik. Kemudian para peserta juga akan diberikan kesempatan bertanya langsung di sesi tanya jawab.</p>
                <p class="my-3"></p><h3>Organization Development</h3>
                <p class="my-15">Event ini berfokus pada topik Organization Development atau yang dikenal sebagai OD</p>
                <p class="my-3"></p><h3>CEO Power Lunch</h3>
                <p class="my-15">Event ini cocok bagi anda yang akan menyelenggarakan rapat tahunan, acara pemberian reward ke karyawan, dan juga termasuk pelatihan berkala.</p>
                </div>
            <div class="col-lg-6 mt-lg-0 mt-5 img">
                <img src="<?php echo base_url();?>/assets/web/images/p1.jpeg" class="img-fluid" alt="Card image cap"/>
            </div>
        </div>
    </div>
</section>
<!-- //section -->

<!-- section -->
<section class="section py-5 bg-light">
    <div class="container py-md-5">
        <div class="row section_grids">
            <div class="col-lg-6">
                <img src="<?php echo base_url();?>/assets/web/images/p2.jpeg" class="img-fluid" alt="card image cap"/>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
            <h2 class="blog-title card-title font-weight-bold">In-House Training</h2>
                <p class="my-3">Dengan Inhouse Training para pemilik bisnis bisa menyediakan sebuah sarana pelatihan untuk meningkatkan kinerja karyawannya tanpa harus mengeluarkan biaya berkala</p>
                 <p class="my-3">Materi yang akan dibawakan bisa disesuaikan, bisa dimodifikasi disesuaikan kebutuhan perusahaan. Kurikulum bisa diatur sesuai dengan kebutuhan karyawan pada saat itu juga dan nanti untuk meningkatkan kinerja perusahaan</p>
                 <p>Untuk materi yang disesuaikan, anda harus menjelaskan kultur perusahaan anda, agar pelatihan tepat sasaran.
            </div>
        </div>
    </div>
</section>
<!-- //section -->
<!-- section -->
<section class="section py-5">
    <div class="container py-md-0">
        <div class="row section_grids">
            <div class="col-lg-6">
                <h2 class="blog-title card-title font-weight-bold">Konsultasi Bisnis</h2>
                <p class="my-15">Konsutasi Bisnis cocok bagi para pemilik bisnis yang ingin mencari soluasi atas sebuah kendala atau tantanga baru dengan efektif dan efisien</p>
                </div>
            <div class="col-lg-6 mt-lg-0 mt-5 img">
                <img src="<?php echo base_url();?>/assets/web/images/p3.jpeg" class="img-fluid" alt="Card image cap"/>
            </div>
        </div>
    </div>
</section>
<!-- //section -->


<!-- section -->
<section class="section py-5 bg-light">
    <div class="container py-md-5">
        <div class="row section_grids">
            <div class="col-lg-6">
                <img src="<?php echo base_url();?>/assets/web/images/p4.jpeg" class="img-fluid" alt="card image cap"/>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">                
                <h2 class="blog-title card-title font-weight-bold">Pelatihan Bisnis</h2>
                <p class="my-4">Business Coaching atau Pelatihan Bisnis bisa membantu pemilik bisnis dalam menemukan solusi atas tantangan bisnis yang dialami serta strategi untuk mencapai goal yang diinginkan</p>
            </div>
        </div>
    </div>
</section>
<!-- //section -->

<div class="container pt-3">
        <div class="row py-sm-5">

           <?php foreach($produk as $pro) : ?>
           <!-- blog grid -->
           <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header p-0">
                        <a href="<?php echo base_url();?>index.php/antawijaya/single">
                            <img class="card-img-bottom" src="<?php echo base_url();?>/assets/web/images/img1.jpg" alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom py-2">
                            <h5 class="blog-title card-title font-weight-bold"><?=$pro->judul?></h5>
                        </div>
                        <div class="blog_w3icon pt-4">
                                <i class="fab fa-servicestack mr-2"></i><?=$pro->sub_judul?></span>
                        </div>
                        <p class="card-text mt-3">
                            <?=$pro->deskripsi?> 
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
		</div>
</section>
