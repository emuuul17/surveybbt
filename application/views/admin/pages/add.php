<h2 class="page-header">Add Page</h2>
<?= validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
<?= form_open('admin/pages/add'); ?>
    <div class="form-group">
     <?= form_label('Page Title', 'title');  ?>
     <?php
        $data = array(
            'name' => 'title',
            'id' => 'title',
            'maxlength' => '100',
            'class' => 'form-control',
            'value' => set_value('title')
        );  
     ?>
     <?= form_input($data); ?>
    </div>

    <div class="form-group"> 
        <?= form_label('Subject', 'subject_id'); ?>
        <?= form_dropdown('subject_id', $subject_options, 0, array('class' => 'form-control')); ?>
    </div>

    <div class="form-group">
        <?= form_label('Body', 'body'); ?>
        <?php
            $data = array(
                'name' => 'body',
                'id' => 'body',
                'class' => 'form-control',
                'value' => set_value('subject')
            );
        ?>
        <?= form_textarea($data); ?>
    </div>

    <div class="form-group">
            <?= form_label('Published', 'is_published'); ?>
            <?= form_radio('is_published', 1, true); ?> Yes
            <?= form_radio('is_published', 0, false); ?> No
    </div>

    <div class="form-group">
            <?= form_label('Feature', 'is_featured'); ?>
            <?= form_radio('is_featured', 1, FALSE); ?> Yes
            <?= form_radio('is_featured', 0, TRUE); ?> No
    </div>

    <div class="form-group">
            <?= form_label('Add To Menu', 'in_menu'); ?>
            <?= form_radio('in_menu', 1, TRUE); ?> Yes
            <?= form_radio('in_menu', 0, FALSE); ?> No
    </div>

    <div class="form-group">
            <?= form_label('Order', 'order'); ?>
            <input class="form-control" type="number" id="order" name="order">
    </div>


    <?= form_submit('mysubmit', 'Add Page', array('class' => 'btn btn-primary'));  ?>
<?= form_close(); ?>