<div class="row">
	<div class="col-md-12">
    <?php if($this->session->flashdata('success')) : ?>
        <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
        <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
    <?php endif; ?>

		<div class="card mb-3">
        <!-- <?= form_open('admin/settings/index/'. $settings->id); ?> -->

			<div class="card-header text-white bg-primary"> <i class="fa fa-list"></i><b> Setting</b> </div>

			<div class="card-body">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
						 aria-controls="pills-general" aria-selected="true">Home</a></li>
					<li class="nav-item"><a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-contact" role="tab"
						 aria-controls="pills-contact" aria-selected="false">Contact</a></li>
					<li class="nav-item"><a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-social" role="tab"
						 aria-controls="pills-social" aria-selected="false">Social</a></li>
				</ul>


				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="form-group">
                        <?= form_label('Title', 'title');  ?>
                            <?php
                                $data = array(
                                    'name' => 'title',
                                    'id' => 'title',
                                    'maxlength' => '50',
                                    'class' => 'form-control',
                                    'value' => $settings->title
                                );  
                            ?>
                            <?= form_input($data); ?>
                            </div>

						<div class="form-group">
                        <?= form_label('Address', 'address');  ?>
                            <?php
                                $data = array(
                                    'name' => 'address',
                                    'id' => 'address',
                                    'maxlength' => '100',
                                    'class' => 'form-control',
                                    'value' => $settings->address
                                );  
                            ?>
                            <?= form_input($data); ?>
                            </div>
				    </div>


					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div class="form-group">
                        <?= form_label('Phone', 'phone');  ?>
                            <?php
                                $data = array(
                                    'name' => 'phone',
                                    'id' => 'phone',
                                    'maxlength' => '25',
                                    'class' => 'form-control',
                                    'value' => $settings->phone
                                );  
                            ?>
                            <?= form_input($data); ?> 
                                </div>

						<div class="form-group">
                        <?= form_label('Email', 'email');  ?>
                            <?php
                                $data = array(
                                    'name' => 'email',
                                    'id' => 'email',
                                    'maxlength' => '100',
                                    'class' => 'form-control',
                                    'value' => $settings->email
                                );  
                            ?>
                            <?= form_input($data); ?>  
                                </div>

						<div class="form-group">
                        <?= form_label('Fax', 'fax');  ?>
                            <?php
                                $data = array(
                                    'name' => 'fax',
                                    'id' => 'fax',
                                    'maxlength' => '25',
                                    'class' => 'form-control',
                                    'value' => $settings->fax
                                );  
                            ?>
                            <?= form_input($data); ?>   
                            </div>
					</div>

                    
					<div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
						<div class="form-group">
                        <?= form_label('Facebook', 'facebook');  ?>
                            <?php
                                $data = array(
                                    'name' => 'facebook',
                                    'id' => 'facebook',
                                    'maxlength' => '200',
                                    'class' => 'form-control',
                                    'value' => $settings->facebook
                                );  
                            ?>
                            <?= form_input($data); ?>   
                            </div>

						<div class="form-group">
                        <?= form_label('Twitter', 'twitter');  ?>
                            <?php
                                $data = array(
                                    'name' => 'twitter',
                                    'id' => 'twitter',
                                    'maxlength' => '200',
                                    'class' => 'form-control',
                                    'value' => $settings->twitter
                                );  
                            ?>
                            <?= form_input($data); ?>   
                                </div>

						<div class="form-group">
                        <?= form_label('Instagram', 'instagram');  ?>
                            <?php
                                $data = array(
                                    'name' => 'instagram',
                                    'id' => 'instagram',
                                    'maxlength' => '200',
                                    'class' => 'form-control',
                                    'value' => $settings->instagram
                                );  
                            ?>
                            <?= form_input($data); ?>   
                            </div>

                            <div class="form-group">
                        <?= form_label('Linkedin', 'linkedin');  ?>
                            <?php
                                $data = array(
                                    'name' => 'linkedin',
                                    'id' => 'linkedin',
                                    'maxlength' => '200',
                                    'class' => 'form-control',
                                    'value' => $settings->linkedin
                                );  
                            ?>
                            <?= form_input($data); ?>   
                            </div>


					</div>

				</div>
			</div>

			<div class="card-footer bg-transparent"><?= form_submit('mysubmit', 'Save', array('class' => 'btn btn-primary'));  ?></div> 
            <?= form_close(); ?>
		</div>
	</div>
</div>
