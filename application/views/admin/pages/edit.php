<h2 class="page-header">Edit Page</h2>

<?= validation_errors('<p class="alert alert-danger">'); ?>
<?= form_open('admin/pages/edit/'.$item->id); ?>
    <div class="form-group">
     <?= form_label('Page Title', 'title');  ?>
     <?php
        $data = array(
            'name' => 'title',
            'id' => 'title',
            'maxlength' => '100',
            'class' => 'form-control',
            'value' => $item->title
        );  
     ?>
     <?= form_input($data); ?>
    </div>

    <div class="form-group"> 
        <?= form_label('Subject', 'subject_id'); ?>
        <?= form_dropdown('subject_id', $subject_options, $item->subject_id, array('class' => 'form-control')); ?>
    </div>

    <div class="form-group">
        <?= form_label('Body', 'body'); ?>
        <?php
            $data = array(
                'name' => 'body',
                'id' => 'body',
                'class' => 'form-control',
                'value' => $item->body
            );
        ?>
        <?= form_textarea($data); ?>
    </div>

 <?php
        if($item->is_published == 1){
            $yes = TRUE;
            $no = FALSE;
        } else{
            $yes = FALSE;
            $no = TRUE;
        }
    ?>
    <div class="form-group">
            <?= form_label('Published', 'is_published'); ?>
            <?= form_radio('is_published', 1, $yes); ?> Yes
            <?= form_radio('is_published', 0, $no); ?> No
    </div>

 <?php
        if($item->is_featured == 1){
            $yes = TRUE;
            $no = FALSE;
        } else{
            $yes = FALSE;
            $no = TRUE;
        }
    ?>
    <div class="form-group">
            <?= form_label('Feature', 'is_featured'); ?>
            <?= form_radio('is_featured', 1, $yes); ?> Yes
            <?= form_radio('is_featured', 0, $no); ?> No
    </div>

 <?php
        if($item->in_menu == 1){
            $yes = TRUE;
            $no = FALSE;
        } else{
            $yes = FALSE;
            $no = TRUE;
        }
    ?>
    <div class="form-group">
            <?= form_label('Add To Menu', 'in_menu'); ?>
            <?= form_radio('in_menu', 1, $yes); ?> Yes
            <?= form_radio('in_menu', 0, $no); ?> No
    </div>

    <div class="form-group">
            <?= form_label('Order', 'order'); ?>
            <input class="form-control" type="number" id="order" name="order" value="<?= $item->order; ?>">
    </div>


    <?= form_submit('mysubmit', 'Update Page', array('class' => 'btn btn-primary'));  ?>
<?= form_close(); ?>