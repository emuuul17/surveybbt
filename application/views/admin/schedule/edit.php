<div class="card mb-3">
    <div class="card-header text-white bg-warning ">
        <b>Edit Jadwal</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open('admin/schedule/edit/'. $item->id); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Nama Kegiatan', 'judul');  ?>
                <?php
                    $data = array(
                        'name' => 'judul',
                        'id' => 'judul',
                        'class' => 'form-control',
                        'value' => $item->judul
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                	<label for="textfield" class="control-label">Tanggal Kegiatan</label>
                		<div class="controls">
                			<input type="date" name="tanggal" id="tanggal" class="input-xxlarge" data-rule-required="true"value="<?php echo $item->tanggal ?>" >
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
                        'value' => $item->durasi
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
                        'value' => $item->pembicara
                    );  
                ?>
                <?= form_input($data); ?>
                </div>
            </div>
        <?= form_submit('mysubmit', 'Update', array('class' => 'btn btn-success'));  ?>
        <?= anchor('admin/schedule', 'Back', 'class="btn btn-danger"'); ?>
        <?= form_close(); ?>
        </div>
    </div>