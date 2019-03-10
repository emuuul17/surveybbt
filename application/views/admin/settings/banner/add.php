<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Add New Product</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/settings/add_banner'); ?>

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
                        'value' => set_value('title')
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
                        'value' => set_value('sub_title')
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
                        'value' => set_value('content')
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
                        'required' => 'required',                        
                        'class' => 'form-control',
                        'value' => set_value('img')
                    );  
                ?>
                <?= form_upload($data); ?>
                </div>

            </div>
        <?= form_submit('mysubmit', 'Add', array('class' => 'btn btn-success'));  ?>
        <?= anchor('admin/settings/banner', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>