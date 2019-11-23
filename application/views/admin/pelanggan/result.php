
    <table class="table table-striped">
  <tr>
   <th>#</th>
   <th>Nim</th>
   <th>Nama</th>
   <th>Alamat</th>
  </tr>
  <?php $no=1; foreach ($mahasiswa as $row): ?>
   <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $row->nim ?></td>
    <td><?php echo $row->nama ?></td>
    <td><?php echo $row->alamat ?></td>
   </tr>
  <?php endforeach ?>
 </table>
 <a href="<?= site_url('Cetak_Filter/cetak/'. $angkatan_id) ?>" target="_blank" class="btn btn-warning">Cetak Laporan</a>