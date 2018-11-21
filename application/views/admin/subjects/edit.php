<h2 class="page-header">Edit Subject</h2>

<?= form_open('admin/subjects/edit/'.$item->id); ?>
    <div class="form-group">
     <?= form_label('Subject Name', 'name');  ?>
     <?php
        $data = array(
            'name' => 'name',
            'id' => 'name',
            'maxlength' => '100',
            'class' => 'form-control',
            'value' => $item->name
        );  
     ?>
     <?= form_input($data); ?>
    </div>

    <?= form_submit('mysubmit', 'Update Subject', array('class' => 'btn btn-primary'));  ?>
<?= form_close(); ?>