<div class="card mb-3">
    <div class="card-header text-white bg-warning ">
        <b>Edit Target</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/home/editowner/'. $item->id); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Nama Pemilik', 'nama');  ?>
                <?php
                    $data = array(
                        'name' => 'nama',
                        'id' => 'nama',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => $item->nama
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

            <div class="form-group col-md-6">
                <?= form_label('Gelar', 'gelar');  ?>
                <?php
                    $data = array(
                        'name' => 'gelar',
                        'id' => 'gelar',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => $item->gelar
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-12">
                <?= form_label('Deskripsi', 'deskripsi');  ?>
                <?php
                    $data = array(
                        'name' => 'deskripsi',
                        'id' => 'deskripsi',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => $item->deskripsi
                    );  
                ?>
                <?= form_textarea($data); ?>
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

                <div class="form-group col-md-6">
                <input type="hidden" name="old_img" value="<?= $item->img ?>" >
                    <img src="<?= base_url();?>/assets/upload/owner/<?= $item->img ?>" class="img-fluid" alt="Card image cap"/>
                </div>

            </div>
    <?= form_submit('mysubmit', 'Update', array('class' => 'btn btn-success'));  ?>
    <?= anchor('admin/home/owner', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>