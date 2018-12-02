<?php $atts = array('id' => 'login_form', 'class' => 'form-signin', 'role' => 'form'); ?>
<?= form_open('admin/users/login', $atts); ?>
        <h2 class="form-signin-heading">Sparkup Admin Login</h2>
        <?= validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
        <?php if($this->session->flashdata('success')) : ?>
            <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('error')) : ?>
                <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
        <?php endif; ?>

        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
     
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
<?=  form_close(); ?>