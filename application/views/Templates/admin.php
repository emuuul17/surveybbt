<!DOCTYPE html>
<html lang="en">
  <head>
   <?php $this->load->view("admin/_partials/head.php") ?>
  </head>
  <body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    
    <div id="wrapper">
      <?php $this->load->view("admin/_partials/sidebar.php") ?>
    
      <div id="content-wrapper">
        <div class="container-fluid">
          <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
          <div class="row">
            <div class="col-md-12">
              <!-- Load Main View -->
              <?php $this->load->view($main); ?>
              </div>
            </div>
          </div><!-- /.container -->  
        </div><!-- /.content-wrapper -->
      </div><!-- /#wrapper -->

</body>

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/footer.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>

</html>
