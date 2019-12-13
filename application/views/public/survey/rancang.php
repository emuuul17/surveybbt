<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $this->load->view("public/_partials/header.php") ?>
  </head>
    <body>
  <?php $this->load->view("public/_partials/navbar.php") ?>
      <div class="card mb-3">
        <div class="card-header text-white bg-warning ">
        <b>SURVEY KEPUASAN DIVISI RANCANG BANGUN</b>
        </div>
    <div class="card-body">
        <?= validation_errors('<p class="alert alert-danger" role="alert">'); ?>
        <?= form_open('public/register/save/'.$id.'/'.$jenis); ?> 
<?php foreach($rancang as $key => $value){ ?>
        <div class="form-row">
            
            <div class="form-group col-md-12">
               <label for="username" class="mycustomclass"><?= $value->pertanyaan; ?></label>
                   <div class="row">
              <label class="col-md-1" for="visa1">Tidak Puas</label>
              <input class="col-md-1" id="radio-<?= $value->id ?>" type="radio" name="radio-<?= $value->id ?>" value="1" />
              <label class="col-md-1"for="mastercard1">Kurang Puas</label>
              <input class="col-md-1" id="radio-<?= $value->id ?>" type="radio" name="radio-<?= $value->id ?>" value="2" /><label class="col-md-1" for="visa1">Cukup Puas</label>
              <input class="col-md-1" id="radio-<?= $value->id ?>" type="radio" name="radio-<?= $value->id ?>" value="3" checked="true" />
              <label class="col-md-1"for="mastercard1">Puas</label>
              <input class="col-md-1" id="radio-<?= $value->id ?>" type="radio" name="radio-<?= $value->id ?>" value="4" />  <label class="col-md-1"for="mastercard1">Sangat Puas</label>
              <input class="col-md-1" id="radio-<?= $value->id ?>" type="radio" name="radio-<?= $value->id ?>" value="5" />
          </div>
                <!-- <?= form_submit($data); ?> -->
                </div>
            </div>
<?php } ?>
    <?= form_submit('mysubmit', 'Simpan', array('class' => 'btn-block btn-success'));  ?>
    <?= form_close(); ?>
        </div>
    </div>
  </body>
  <?php $this->load->view("public/_partials/footer.php") ?>
<?php $this->load->view("public/_partials/js.php") ?>
</html>

