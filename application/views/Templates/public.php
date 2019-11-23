<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $this->load->view("public/_partials/header.php") ?>
  </head>
  <body>
  <?php $this->load->view("public/_partials/navbar.php") ?>
  <?php $this->load->view("public/_partials/banner.php") ?>
      <div class="row">
        <div class="col-md-12">
          <!-- Load Main View -->
            <?php $this->load->view($main); ?>
          </div>
      </div>
  <?php $this->load->view("public/_partials/register.php") ?>
  </body>

  <?php $this->load->view("public/_partials/footer.php") ?>
<?php $this->load->view("public/_partials/js.php") ?>
</html>
