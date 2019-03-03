
<?php if($this->session->flashdata('success')) : ?>
    <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
<?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
    <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header text-white bg-primary ">
    <i class="fa fa-list"></i><b> <?= $title ?></b>
         <?= anchor('admin/feature/addProduct', '<i class="fa fa-plus-circle" aria-hidden="true"> Add</i>', 'class="btn btn-sm btn-success float-sm-right"'); ?>
	    </div>
    <div class="card-body table-responsive table-hover">
        <?php if($ListData) : ?>
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Sub Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Tindakan</th>
                </tr>
        <?php 
        $i = 1;
        foreach($ListData as $produk) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $produk['judul']; ?></td>
                    <td><?= $produk['sub_judul']; ?></td>
                    <td><?= $produk['deskripsi']; ?></td>
                    <td> <img src="<?= base_url();?>/assets/upload/feature/<?= $produk['img']; ?>" class="img-fluid" alt="Card image cap"/></td>
                    <td>
                        <?= anchor('admin/feature/editProduct/'.$produk['id'].'', '<i class="fa fa-tasks" aria-hidden="true"></i>', 'class="btn btn-sm btn-warning"'); ?>
                        <a href="#myModal" class="btn btn-sm btn-danger" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons"></i>
                        </div>				
                        <h4 class="modal-title">Yakin Untuk Menghapus Data ini?</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Data yang dihapus tidak dapat dibalikan kembali.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <?= anchor('admin/feature/deleteProduct/'.$produk['id'].'', 'Delete', 'class="btn btn-danger"'); ?>
                    </div>
                </div>
            </div>
        </div>   
            </div>

    