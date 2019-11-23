<div class="card mb-3">
    <div class="card-header text-white bg-primary ">
    <i class="fa fa-list"></i><b> Data Responden</b>
	    </div>
    <div class="card-body table-responsive table-hover" id="form_data">
        <?php 
        if($ListData) : ?>
            <table class="table table-bordered" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama Perusahaan / Personal</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Provinsi</th>
                    <th>No. Telepon</th>
                    <th>Jenis Pelayanan Teknis</th>
                    <th>Tanggal</th>
                </tr>
        <?php 
        $i = 1;
        foreach($ListData as $daftar) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $daftar['nama']; ?></td>
                    <td><?= $daftar['jenis_kelamin']; ?></td>
                    <td><?= $daftar['nama_perusahaan']; ?></td>
                    <td><?= $daftar['alamat']; ?></td>
                    <td><?= $daftar['kota']; ?></td>
                    <td><?= $daftar['provinsi']; ?></td>
                    <td><?= $daftar['no_tlp']; ?></td>
                    <td><?= $daftar['jenis_jasa']; ?></td>
                    <td><?= date('d-M-Y', strtotime($daftar['tanggal'])) ?></td>
                    </tr>
        <?php 
        $i++;
            endforeach; 
            ?>
                </table>
        <?php else : ?> 
            <p>No Data</p>
        <?php endif; ?>
        </div>