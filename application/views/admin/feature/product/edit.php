<div class="card mb-3">
    <div class="card-header text-white bg-warning ">
        <b>Edit Product</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/feature/editproduct/'. $item->id); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Judul', 'judul');  ?>
                <?php
                    $data = array(
                        'name' => 'judul',
                        'id' => 'judul',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => $item->judul
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Sub Judul', 'sub_judul');  ?>
                <?php
                    $data = array(
                        'name' => 'sub_judul',
                        'id' => 'sub_judul',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => $item->sub_judul
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Sub Judul 2', 'sub_judul_2');  ?>
                <?php
                    $data = array(
                        'name' => 'sub_judul_2',
                        'id' => 'sub_judul_2',
                        'placeholder' => 'Opsional',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => $item->sub_judul_2
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Sub Judul 3 ', 'sub_judul_3');  ?>
                <?php
                    $data = array(
                        'name' => 'sub_judul_3',
                        'id' => 'sub_judul_3',
                        'placeholder' => 'Opsional',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => $item->sub_judul_3
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
                <?= form_label('Deskripsi 2', 'deskripsi_2');  ?>
                <?php
                    $data = array(
                        'name' => 'deskripsi_2',
                        'id' => 'deskripsi_2',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'placeholder' => 'Opsional',
                        'value' => $item->deskripsi_2
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Deskripsi 3', 'deskripsi_3');  ?>
                <?php
                    $data = array(
                        'name' => 'deskripsi_3',
                        'id' => 'deskripsi_3',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'placeholder' => 'Opsional',
                        'value' => $item->deskripsi_3
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

                <div class="form-group col-md-6">
                <input type="hidden" name="old_img" value="<?= $item->img ?>" >
                    <img src="<?= base_url();?>/assets/upload/feature/<?= $item->img ?>" class="img-fluid" alt="Card image cap"/>
                </div>

            </div>
    <?= form_submit('mysubmit', 'Update', array('class' => 'btn btn-success'));  ?>
    <?= anchor('admin/feature/product', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>