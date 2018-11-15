<h2 class="page-header">Subjects</h2>
    <?php if($this->session->flashdata('success')) : ?>
        <?= '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'  ?>
    <?php endif; ?>