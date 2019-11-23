<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Data Pelanggan Yang Melakukan Survey</b>
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
                <?= form_label('Jenis Kelamin', 'jenis_kelamin');  ?>
                <?php
                    $data = array(
                        'name' => 'jenis_kelamin',
                        'id' => 'jenis_kelamin',
                        'class' => 'form-control',
                        'required' => 'required',
                        'readonly' => true,
                        'value' => $item->jenis_kelamin
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Nama Perusahaan', 'nama_perusahaan');  ?>
                <?php
                    $data = array(
                        'name' => 'nama_perusahaan',
                        'id' => 'nama_perusahaan',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->nama_perusahaan
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Alamat', 'alamat');  ?>
                <?php
                    $data = array(
                        'name' => 'alamat',
                        'id' => 'alamat',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->alamat
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Kota', 'kota');  ?>
                <?php
                    $data = array(
                        'name' => 'kota',
                        'id' => 'kota',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->kota
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Provinsi', 'provinsi');  ?>
                <?php
                    $data = array(
                        'name' => 'provinsi',
                        'id' => 'provinsi',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->provinsi
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('No Telp', 'no_tlp');  ?>
                <?php
                    $data = array(
                        'name' => 'no_tlp',
                        'id' => 'no_tlp',
                        'class' => 'form-control',
                        'required' => 'required',
                        'readonly' => true,
                        'value' => $item->no_tlp
                    );  
                ?>
                <?= form_input($data); ?>
                </div>
               
<!--                 <div class="form-group col-md-6">
                	<label for="textfield" class="control-label">Tanggal Pendaftar</label>
                		<div class="controls">
                			<input type="date" name="tanggal" id="tanggal" class="input-xxlarge" data-rule-required="true" disabled value="<?php echo $item->tanggal_event ?>" >
						</div>
				</div> -->

                

                

                <div class="form-group col-md-6">
                <?= form_label('Jenis Jasa', 'jenis_jasa');  ?>
                <?php
                    $data = array(
                        'name' => 'jenis_jasa',
                        'id' => 'jenis_jasa',
                        'class' => 'form-control',
                        'readonly' => true,
                        'value' => $item->jenis_jasa
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <!-- <div class="form-group col-md-6">
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
                </div> -->

            </div>
    <?= anchor('admin/pelanggan/index', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>