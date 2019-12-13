<!-- Sidebar -->
    <ul class="sidebar navbar-nav" style="background: #2979ff">
      <li class="nav-item active <?= $this->uri->segment(2) == '' ? 'active': '' ?>">
          <?= anchor('admin', ' Halaman Utama', array('class' => 'nav-link fas fa-fw fa-tachometer-alt'));?>
      </li>
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-star"></i>
          <span>Pertanyaan</span>

        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Pertanyaan:</h6>
          <?= anchor('admin/pertanyaan/pengujian', ' Divisi Pengujian', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/pertanyaan/rancang_bangun', ' Divisi Rancang Bangun', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/pertanyaan/pelatihan', ' Divisi Pelatihan', array('class' => 'dropdown-item'));?>
        </div>
      </li>
      <li class="nav-item active">
        <?= anchor('admin/pelanggan', ' Data Responden', array('class' => 'nav-link fas fa-table'));?>
      </li>
       

      <li class="nav-item active">
        <?= anchor('admin/laporan', ' Hasil Survey', array('class' => 'nav-link fas fa-book'));?>
      </li> 

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-star"></i>
          <span>Grafik Hasil Survey</span>

        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Jenis Jasa Pelayanan:</h6>
          <?= anchor('admin/hasilsurvey/pengujian', ' Divisi Pengujian', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/hasilsurvey/rancang', ' Divisi Rancang Bangun', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/hasilsurvey/pelatihan', ' Divisi Pelatihan', array('class' => 'dropdown-item'));?>
        </div>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-tools"></i>
          <span>Pengaturan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Pengaturan:</h6>
      <!--     <?= anchor('admin/settings/banner', ' Banner', array('class' => 'dropdown-item'));?> -->
          <?= anchor('admin/users', ' User', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/settings/footer', ' Footer', array('class' => 'dropdown-item'));?>
        </div>
      </li>

    </ul>