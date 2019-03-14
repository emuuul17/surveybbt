<div class="card mb-3">
    <div class="card-header text-white bg-warning ">
        <b>Edit Team</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/about/edittim/'. $item->id); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Nama', 'nama');  ?>
                <?php
                    $data = array(
                        'name' => 'nama',
                        'id' => 'nama',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => $item->nama
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-12">
                <?= form_label('Jabatan', 'jabatan');  ?>
                <?php
                    $data = array(
                        'name' => 'jabatan',
                        'id' => 'jabatan',
                        'class' => 'form-control',
                        'value' => $item->jabatan
                    );  
                ?>
                <?= form_textarea($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Linkedin', 'linkedin');  ?>
                <?php
                    $data = array(
                        'name' => 'linkedin',
                        'id' => 'linkedin',
                        'class' => 'form-control',
                        'value' => $item->linkedin
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Twitter', 'twitter');  ?>
                <?php
                    $data = array(
                        'name' => 'twitter',
                        'id' => 'twitter',
                        'class' => 'form-control',
                        'value' => $item->twitter
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Personal Web', 'website');  ?>
                <?php
                    $data = array(
                        'name' => 'website',
                        'id' => 'website',
                        'class' => 'form-control',
                        'value' => $item->website
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
                    <img src="<?= base_url();?>/assets/upload/target/<?= $item->img ?>" class="img-fluid" alt="Card image cap"/>
                </div>

            </div>
    <?= form_submit('mysubmit', 'Update', array('class' => 'btn btn-success'));  ?>
    <?= anchor('admin/about/tim', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>