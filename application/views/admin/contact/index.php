
<?php if($this->session->flashdata('success')) : ?>
    <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
<?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
    <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header text-white bg-primary ">
        Contact
         <?= anchor('admin/contact/add', 'Add', 'class="btn btn-sm btn-success float-sm-right"'); ?>
	    </div>
    <div class="card-body table-responsive">
        <?php if($kontak) : ?>
            <table class="table table-bordered" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Tlp</th>
                    <th>Tindakan</th>
                </tr>
        <?php 
        $i = 1;
        foreach($kontak as $user) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $user->nama; ?></td>
                    <td><?= $user->no_tlp; ?></td>
                    <td>
                        <?= anchor('admin/contact/edit/'.$user->id.'', 'Edit', 'class="btn btn-sm btn-primary"'); ?>
                        <?= anchor('admin/contact/delete/'.$user->id.'', 'Delete', 'class="btn btn-sm btn-danger"'); ?>
                    </td>
                    </tr>
        <?php 
        $i++;
            endforeach; ?>
                </table>
        <?php else : ?> 
            <p>No Data</p>
        <?php endif; ?>
        </div>
    </div>