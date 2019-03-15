<div class="row">
	<div class="col-md-12">
    <?php if($this->session->flashdata('success')) : ?>
        <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
        <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
    <?php endif; ?>

		<div class="card mb-3">
        <?= form_open('admin/about/welcome/'. $welcome->id); ?>

			<div class="card-header text-white bg-primary"> <i class="fas fa-list"></i><b><?= $title ?></b> </div>

			<div class="card-body">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
						 aria-controls="pills-general" aria-selected="true"><?= $title ?></a></li>
				</ul>


				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					   
                        <div class="form-group">
                        <?= form_label('Judul', 'judul');  ?>
                            <?php
                                $data = array(
                                    'name' => 'judul',
                                    'id' => 'judul',
                                    'maxlength' => '50',
                                    'class' => 'form-control',
                                    'value' => $welcome->judul
                                );  
                            ?>
                            <?= form_input($data); ?>
                            </div>

						<div class="form-group">
                        <?= form_label('Deskripsi', 'deskripsi');  ?>
                            <?php
                                $data = array(
                                    'name' => 'deskripsi',
                                    'id' => 'deskripsi',
                                    'maxlength' => '100',
                                    'class' => 'form-control',
                                    'value' => $welcome->deskripsi
                                );  
                            ?>
                            <?= form_textarea($data); ?>
                            </div>

                            <div class="row">

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

                                <div class="form-group col-md-6">
                                <input type="hidden" name="old_img" value="<?= $welcome->img ?>" >
                                    <img src="<?= base_url();?>/assets/upload/welcome/<?= $welcome->img ?>" class="img-fluid" alt="Card image cap"/>
                                </div>

                            </div>


				    </div>
				</div>

			</div>

			<div class="card-footer bg-transparent"><?= form_submit('mysubmit', 'Save', array('class' => 'btn btn-primary'));  ?></div> 
            <?= form_close(); ?>
		</div>
	</div>
</div>
