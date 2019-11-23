<div class="card mb-3">
    <div class="card-header text-white bg-warning ">
        <b>Edit Pertanyaan Rancang Bangun</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/pertanyaan/edit_rancang/'. $item->id); ?>

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
                        'value' => $item->pertanyaan
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

            
            </div>
    <?= form_submit('mysubmit', 'Update', array('class' => 'btn btn-success'));  ?>
    <?= anchor('admin/pertanyaan/rancang_bangun', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
    
        </div>
    </div>