<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Add New Testimoni</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/home/addtestimoni'); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Nama', 'nama');  ?>
                <?php
                    $data = array(
                        'name' => 'nama',
                        'id' => 'nama',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('nama')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Pekerjaan', 'sub_nama');  ?>
                <?php
                    $data = array(
                        'name' => 'sub_nama',
                        'id' => 'sub_nama',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('sub_nama')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-12">
                <?= form_label('Testimoni', 'testimoni');  ?>
                <?php
                    $data = array(
                        'name' => 'testimoni',
                        'id' => 'testimoni',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('testimoni')
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

            </div>
        <?= form_submit('mysubmit', 'Add', array('class' => 'btn btn-success'));  ?>
        <?= anchor('admin/home/testimoni', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>