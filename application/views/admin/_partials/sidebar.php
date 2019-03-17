<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active <?= $this->uri->segment(2) == '' ? 'active': '' ?>">
          <?= anchor('admin', ' Dashboard', array('class' => 'nav-link fas fa-fw fa-tachometer-alt'));?>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-home"></i>
          <span>Home</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">About:</h6>
          <?= anchor('admin/about/welcome', ' Welcome', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/home/owner', ' Owner', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/home/testimoni', ' Testimoni', array('class' => 'dropdown-item'));?>
         
        </div>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-building"></i>
          <span>About</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">About:</h6>
          <!-- <?= anchor('admin/about/welcome', ' Welcome', array('class' => 'dropdown-item'));?> -->
          <?= anchor('admin/about/vimi', ' Visi Misi', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/about/nilai', ' Nilai', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/about/metodologi', ' Metodologi', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/about/filosofi', ' Filosofi', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/about/sasaran', ' Target', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/about/tim', ' Tim', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/about/kegiatan', ' Kegiatan', array('class' => 'dropdown-item'));?>
        </div>
      </li>

      <li class="nav-item active">
        <?= anchor('admin/contact', ' Contact', array('class' => 'nav-link far fa-address-book'));?>
      </li> 
      <li class="nav-item active">
        <?= anchor('admin/register', ' Pendaftaran', array('class' => 'nav-link fas fa-registered'));?>
      </li> 
      <li class="nav-item active">
        <?= anchor('admin/schedule', ' Jadwal', array('class' => 'nav-link fas fa-table'));?>
      </li> 
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-star"></i>
          <span>Features</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Features:</h6>
          <?= anchor('admin/feature/product', ' Products', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/feature/service', ' Services', array('class' => 'dropdown-item'));?>
        </div>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-tools"></i>
          <span>Settings</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Settings:</h6>
          <?= anchor('admin/settings/banner', ' Banner', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/users', ' Users', array('class' => 'dropdown-item'));?>
          <?= anchor('admin/settings/footer', ' Footer', array('class' => 'dropdown-item'));?>
        </div>
      </li>

    </ul>