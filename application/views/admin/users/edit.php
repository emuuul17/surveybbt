<h2 class="page-header">Edit User</h2>

<?= validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
<?= form_open('admin/users/edit/'. $item->id); ?>

    <div class="form-group">
     <?= form_label('First Name', 'first_name');  ?>
     <?php
        $data = array(
            'name' => 'first_name',
            'id' => 'first_name',
            'maxlength' => '50',
            'class' => 'form-control',
            'value' => $item->first_name
        );  
     ?>
     <?= form_input($data); ?>
    </div>

    <div class="form-group">
     <?= form_label('Last Name', 'last_name');  ?>
     <?php
        $data = array(
            'name' => 'last_name',
            'id' => 'last_name',
            'maxlength' => '50',
            'class' => 'form-control',
            'value' => $item->last_name
        );  
     ?>
     <?= form_input($data); ?>
    </div>

    <div class="form-group">
     <?= form_label('Username', 'username');  ?>
     <?php
        $data = array(
            'name' => 'username',
            'id' => 'username',
            'maxlength' => '20',
            'class' => 'form-control',
            'value' => $item->username
        );  
     ?>
     <?= form_input($data); ?>
    </div>

    <div class="form-group">
     <?= form_label('Email', 'email');  ?>
     <?php
        $data = array(
            'name' => 'email',
            'id' => 'email',
            'maxlength' => '150',
            'class' => 'form-control',
            'value' => $item->email
        );  
     ?>
     <?= form_input($data); ?>
    </div>

    <?= form_submit('mysubmit', 'Edit User', array('class' => 'btn btn-primary'));  ?>
<?= form_close(); ?>