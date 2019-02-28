<?php $atts = array('id' => 'login_form', 'role' => 'form'); ?>
<?= form_open('admin/users/login', $atts); ?>

        <?php if($this->session->flashdata('success')) : ?>
                <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('error')) : ?>
                <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
            <?php endif; ?>
            
        <?= validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
        <?php if($this->session->flashdata('success')) : ?>
            <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('error')) : ?>
                <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
        <?php endif; ?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Antawijaya Sign In</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?=  form_close(); ?>

