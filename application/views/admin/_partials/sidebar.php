<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active <?= $this->uri->segment(2) == '' ? 'active': '' ?>">
          <?= anchor('admin', ' Home', array('class' => 'nav-link fas fa-fw fa-tachometer-alt'));?>
      </li>
      <li class="nav-item">
        <?= anchor('admin/pages', ' Pages', array('class' => 'nav-link fas fa-fw fa-chart-area'));?>
      </li>
      <li class="nav-item">
        <?= anchor('admin/subjects', ' Subjects', array('class' => 'nav-link fas fa-fw fa-table'));?>
        </li>
      <li class="nav-item">
        <?= anchor('admin/users', ' Users', array('class' => 'nav-link fas fa-fw fa-table'));?>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <?= anchor('admin/contact', ' Contact', array('class' => 'dropdown-item'));?>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        </div>
      </li>
    </ul>