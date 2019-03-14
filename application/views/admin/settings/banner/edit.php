<div class="card mb-3">
    <div class="card-header text-white bg-warning ">
        <b>Edit Product</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/settings/editbanner/'. $item->id); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
            <?= form_label('Judul', 'title');  ?>
                <?php
                    $data = array(
                        'name' => 'title',
                        'id' => 'title',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => $item->title
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Sub Judul', 'sub_title');  ?>
                <?php
                    $data = array(
                        'name' => 'sub_title',
                        'id' => 'sub_title',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => $item->sub_title
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Content', 'content');  ?>
                <?php
                    $data = array(
                        'name' => 'content',
                        'id' => 'content',
                        'required' => 'required',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => $item->content
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Foto', 'img');  ?>
                <?php
                    $data = array(
                        'name' => 'img',
                        'id' => 'img',
                        'class' => 'form-control',
                        'value' => $item->img
                    );  
                ?>
                <?= form_upload($data); ?>
                </div>

                <div class="form-group col-md-6">
                <input type="hidden" name="old_img" value="<?= $item->img ?>" >
                    <img src="<?= base_url();?>/assets/css/images/<?= $item->img ?>" class="img-fluid" alt="Card image cap"/>
                </div>

            </div>
    <?= form_submit('mysubmit', 'Update', array('class' => 'btn btn-success'));  ?>
    <?= anchor('admin/settings/banner', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>