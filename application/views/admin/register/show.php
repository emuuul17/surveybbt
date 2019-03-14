<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Data Pendaftar</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Nama Pendaftar', 'nama');  ?>
                <?php
                    $data = array(
                        'name' => 'nama',
                        'id' => 'nama',
                        'class' => 'form-control',
                        'required' => 'required',
                        'readonly' => true,
                        'value' => $item->nama
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Email', 'email');  ?>
                <?php
                    $data = array(
                        'name' => 'email',
                        'id' => 'email',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->email
                    );  
                ?>
                <?= form_input($data); ?>
                </div>
               
                <div class="form-group col-md-6">
                	<label for="textfield" class="control-label">Tanggal Pendaftar</label>
                		<div class="controls">
                			<input type="date" name="tanggal" id="tanggal" class="input-xxlarge" data-rule-required="true" disabled value="<?php echo $item->tanggal_event ?>" >
						</div>
				</div>

                <div class="form-group col-md-6">
                <?= form_label('Perusahaan', 'company_person');  ?>
                <?php
                    $data = array(
                        'name' => 'company_person',
                        'id' => 'company_person',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->company_person
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Jumlah Personel', 'jumlah_personal');  ?>
                <?php
                    $data = array(
                        'name' => 'jumlah_personal',
                        'id' => 'jumlah_personal',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->jumlah_personal
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Jenis Pelatihan', 'jenis_pelatihan');  ?>
                <?php
                    $data = array(
                        'name' => 'jenis_pelatihan',
                        'id' => 'jenis_pelatihan',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->jenis_pelatihan
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Jenis Pembayaran', 'pembayaran');  ?>
                <?php
                    $data = array(
                        'name' => 'pembayaran',
                        'id' => 'pembayaran',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->pembayaran
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

            </div>
    <?= anchor('admin/register/', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>