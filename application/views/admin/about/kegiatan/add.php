<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Add New Foto Kegiatan</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/about/addkegiatan'); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Judul Kegiatn', 'title');  ?>
                <?php
                    $data = array(
                        'name' => 'title',
                        'id' => 'title',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('title')
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
                        'value' => set_value('img')
                    );  
                ?>
                <?= form_upload($data); ?>
                </div>

            </div>
        <?= form_submit('mysubmit', 'Add', array('class' => 'btn btn-success'));  ?>
        <?= anchor('admin/about/kegiatan', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>