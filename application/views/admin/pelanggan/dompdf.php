<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
  <img src="assets/img/logo.jpg" style="position: absolute; width: 200px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          KEMENPERIN BALAI BESAR TEKSTIL
          <br>BANDUNG INDONESIA
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <p align="center">
    LAPORAN DATA RESPONDEN <br>
    <b></b>
  </p>
  <table class="table table-bordered">
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Nama Perusahaan</th>
      <th>Alamat</th>
      <th>Kota</th>
      <th>Provinsi</th>
      <th>No. Telp</th>
      <th>Jenis Jasa</th>
      <th>Tanggal</th>
    </tr>
    <?php $id = 1; foreach ($ListData as $row): ?>
      <tr>
        <td><?php echo $id++ ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['jenis_kelamin'] ?></td>
        <td><?php echo $row['nama_perusahaan'] ?></td>
        <td><?php echo $row['alamat'] ?></td>
        <td><?php echo $row['kota'] ?></td>
        <td><?php echo $row['provinsi'] ?></td>
        <td><?php echo $row['no_tlp'] ?></td>
        <td><?php echo $row['jenis_jasa'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>

</body>
</html>