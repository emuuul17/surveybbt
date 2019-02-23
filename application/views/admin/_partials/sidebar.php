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
    </ul>