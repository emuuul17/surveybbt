
<?php if($this->session->flashdata('success')) : ?>
    <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
<?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
    <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header text-white bg-primary ">
    <i class="fa fa-list"></i><b> <?= $title ?></b>
	    </div>
    <div class="card-body table-responsive table-hover">
        <?php if($ListData) : ?>
            <table class="table table-bordered" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Jenis Pelathian</th>
                    <th>Tanggal</th>
                    <th>Jenis Pembayaran</th>
                    <th>Tindakan</th>
                </tr>
        <?php 
        $i = 1;
        foreach($ListData as $daftar) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $daftar['nama']; ?></td>
                    <td><?= $daftar['email']; ?></td>
                    <td><?= $daftar['company_person']; ?></td>
                    <td><?= $daftar['jenis_pelatihan']; ?></td>
                    <td><?= $daftar['tanggal_event']; ?></td>
                    <td><?= $daftar['pembayaran']; ?></td>
                    <td>
                        <?= anchor('admin/register/show/'.$daftar['id'].'', '<i class="fas fa-search-plus" aria-hidden="true"></i>', 'class="btn btn-sm btn-primary"'); ?>
                        <?= anchor('admin/register/delete/'.$daftar['id'].'', '<i class="fa fa-trash" aria-hidden="true"></i>', array('class="btn btn-sm btn-danger"','onclick'=>"return confirm('Yakin untuk menghapus data ini?')")); ?>                                               
                        
                        <!-- <a href="#myModal" class="btn btn-sm btn-danger" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                    </td>
                    </tr>
        <?php 
        $paging=(!empty($pagermessage) ? $pagermessage : '');
        $i++;
            endforeach; 
            echo "<tr><td colspan='9'><div style='background:000;'>$paging &nbsp;".$this->pagination->create_links()."</div></td></tr>";
            ?>
                </table>
        <?php else : ?> 
            <p>No Data</p>
        <?php endif; ?>
        </div>
    