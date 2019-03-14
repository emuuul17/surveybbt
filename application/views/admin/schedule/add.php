<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Add New Jadwal</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open('admin/schedule/add'); ?>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Nama Kegiatan', 'judul');  ?>
                <?php
                    $data = array(
                        'name' => 'judul',
                        'id' => 'judul',
                        'class' => 'form-control',
                        'value' => set_value('judul')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                	<label for="textfield" class="control-label">Tanggal Kegiatan</label>
                		<div class="controls">
                			<input type="date" name="tanggal" id="tanggal" class="input-xxlarge" data-rule-required="true" >
						</div>
				</div>

                <div class="form-group col-md-6">
                <?= form_label('Durasi Kegiatan', 'durasi');  ?>
                <?php
                    $data = array(
                        'name' => 'durasi',
                        'id' => 'durasi',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('durasi')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Pembicara', 'pembicara');  ?>
                <?php
                    $data = array(
                        'name' => 'pembicara',
                        'id' => 'pembicara',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('pembicara')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>
            </div>
    <?= form_submit('mysubmit', 'Add', array('class' => 'btn btn-success'));  ?>
    <?= anchor('admin/schedule', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>