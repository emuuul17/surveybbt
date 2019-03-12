<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Add New Data Nilai</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open('admin/about/addnilai'); ?>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Judul', 'judul');  ?>
                <?php
                    $data = array(
                        'name' => 'judul',
                        'id' => 'judul',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => set_value('judul')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Deskripsi', 'deskripsi');  ?>
                <?php
                    $data = array(
                        'name' => 'deskripsi',
                        'id' => 'deskripsi',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'value' => set_value('deskripsi')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>
            </div>
    <?= form_submit('mysubmit', 'Add', array('class' => 'btn btn-success'));  ?>
    <?= anchor('admin/about/nilai', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>