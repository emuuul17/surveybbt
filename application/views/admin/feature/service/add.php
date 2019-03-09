<div class="card mb-3">
    <div class="card-header text-white bg-success ">
        <b>Add New Services</b>
	    </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open_multipart('admin/feature/add_service'); ?>

        <div class="form-row">
            <div class="form-group col-md-6">
                <?= form_label('Judul', 'judul');  ?>
                <?php
                    $data = array(
                        'name' => 'judul',
                        'id' => 'judul',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('judul')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('Sub Judul', 'sub_judul');  ?>
                <?php
                    $data = array(
                        'name' => 'sub_judul',
                        'id' => 'sub_judul',
                        'maxlength' => '50',
                        'class' => 'form-control',
                        'required' => 'required',
                        'value' => set_value('sub_judul')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

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
                <?= form_label('List 1', 'desk_1');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_1',
                        'id' => 'desk_1',
                        'maxlength' => '100',
                        'required' => 'required',
                        'class' => 'form-control',
                        'value' => set_value('desk_1')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('List 2', 'desk_2');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_2',
                        'id' => 'desk_2',
                        'maxlength' => '100',
                        'required' => 'required',
                        'class' => 'form-control',
                        'value' => set_value('desk_2')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-6">
                <?= form_label('List 3', 'desk_3');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_3',
                        'id' => 'desk_3',
                        'maxlength' => '100',
                        'required' => 'required',
                        'class' => 'form-control',
                        'value' => set_value('desk_3')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 4', 'desk_4');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_4',
                        'id' => 'desk_4',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_4')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 5', 'desk_5');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_5',
                        'id' => 'desk_5',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_5')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 6', 'desk_6');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_6',
                        'id' => 'desk_6',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_6')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 7', '`desk_7`');  ?>
                <?php
                    $data = array(
                        'name' => '`desk_7`',
                        'id' => '`desk_7`',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('`desk_7`')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 8', 'desk_8');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_8',
                        'id' => 'desk_8',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_8')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 9', 'desk_9');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_9',
                        'id' => 'desk_9',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_9')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 10', 'desk_10');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_10',
                        'id' => 'desk_10',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_10')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 11', 'desk_11');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_11',
                        'id' => 'desk_11',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_11')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 12', 'desk_12');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_12',
                        'id' => 'desk_12',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_12')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 13', 'desk_13');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_13',
                        'id' => 'desk_13',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_13')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 14', 'desk_14');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_14',
                        'id' => 'desk_14',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_14')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

                <div class="form-group col-md-2">
                <?= form_label('List 15', 'desk_15');  ?>
                <?php
                    $data = array(
                        'name' => 'desk_15',
                        'id' => 'desk_15',
                        'maxlength' => '100',
                        'placeholder' => 'Opsional',
                        'class' => 'form-control',
                        'value' => set_value('desk_15')
                    );  
                ?>
                <?= form_input($data); ?>
                </div>

            </div>
        <?= form_submit('mysubmit', 'Add', array('class' => 'btn btn-success'));  ?>
        <?= anchor('admin/feature/service', 'Back', 'class="btn btn-danger"'); ?>
    <?= form_close(); ?>
        </div>
    </div>