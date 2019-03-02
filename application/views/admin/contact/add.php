<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Add New Contact</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open('admin/contact/add'); ?>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Nama', 'nama');  ?>
                <?php
                    $data = array(
                        'name' => 'nama',
                        'id' => 'nama',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => set_value('nama')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('No Telepon', 'no_tlp');  ?>
                <?php
                    $data = array(
                        'name' => 'no_tlp',
                        'id' => 'no_tlp',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => set_value('no_tlp')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>
            </div>
    <?= form_submit('mysubmit', 'Add', array('class' => 'btn btn-success'));  ?>
    <?= anchor('admin/contact', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>