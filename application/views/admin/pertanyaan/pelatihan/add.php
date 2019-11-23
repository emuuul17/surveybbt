<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Add New Pertanyaan Pelatihan</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/pertanyaan/add_pelatihan'); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Pertanyaan', 'pertanyaan');  ?>
                <?php
                    $data = array(
                        'name' => 'pertanyaan',
                        'id' => 'pertanyaan',
                        'maxlength' => '100',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('pertanyaan')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

            </div>
        <?= form_submit('mysubmit', 'Add', array('class' => 'btn btn-success'));  ?>
        <?= anchor('admin/pertanyaan/pelatihan', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>