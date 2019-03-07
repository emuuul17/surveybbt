<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active <?= $this->uri->segment(2) == '' ? 'active': '' ?>">
          <?= anchor('admin', ' Home', array('class' => 'nav-link fas fa-fw fa-tachometer-alt'));?>
      </li>
      <!-- <li class="nav-item">
        <?= anchor('admin/pages', ' Pages', array('class' => 'nav-link fas fa-fw fa-chart-area'));?>
      </li> -->
      <!-- <li class="nav-item">
        <?= anchor('admin/subjects', ' Subjects', array('class' => 'nav-link fas fa-fw fa-table'));?>
        </li> -->
      <li class="nav-item active">
        <?= anchor('admin/contact', ' Contact', array('class' => 'nav-link far fa-address-book'));?>
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