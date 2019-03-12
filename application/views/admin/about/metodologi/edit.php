<div class="card mb-3">
    <div class="card-header text-white bg-warning ">
        <b>Edit Metodologi</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open('admin/about/editmetodologi/'. $item->id); ?>

        <div class="form-row">
            <div class="form-group col-md-12">
                <?= form_label('Judul', 'judul');  ?>
                <?php
                    $data = array(
                        'name' => 'judul',
                        'id' => 'judul',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => $item->judul
                    );  
                ?>
                <?= form_input($data); ?>
                </div>
            </div>
        <?= form_submit('mysubmit', 'Update', array('class' => 'btn btn-success'));  ?>
        <?= anchor('admin/about/metodologi', 'Back', 'class="btn btn-danger"'); ?>
        <?= form_close(); ?>
        </div>
    </div>