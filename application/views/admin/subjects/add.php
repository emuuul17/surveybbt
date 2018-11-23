<h2 class="page-header">Add Subject</h2>
<?= validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
<?= form_open('admin/subjects/add'); ?>
    <div class="form-group">
     <?= form_label('Subject Name', 'name');  ?>
     <?php
        $data = array(
            'name' => 'name',
            'id' => 'name',
            'maxlength' => '100',
            'class' => 'form-control',
            'value' => set_value('name')
        );  
     ?>
     <?= form_input($data); ?>
    </div>

    <?= form_submit('mysubmit', 'Add Subject', array('class' => 'btn btn-primary'));  ?>
<?= form_close(); ?>