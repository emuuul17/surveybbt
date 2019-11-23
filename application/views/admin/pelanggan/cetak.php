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
 <img src="assets/img/logo.jpg" style="position: absolute; width: 60px; height: auto;">
 <table style="width: 100%;">
  <tr>
   <td align="center">
    <span style="line-height: 1.6; font-weight: bold;">
     LAPORAN HASIL SURVEY KEPUASAN
     <br>BALAI BESAR TEKSTIL BANDUNG
    </span>
   </td>
  </tr>
 </table>

 <hr class="line-title"> 
 <p align="center">
  LAPORAN DATA LAPORAN <br>
  <b>Tahun 2019</b>
 </p>
 <table class="table table-bordered">
  <tr>
   <th>#</th>
   <th>Nama</th>
   <th>Jenis Kelamin</th>
   <th>Nama Perusahaan</th>
  </tr>
  <?php $no=1; foreach ($tb_responden as $row): ?>
   <tr>
    <td><?php echo $id++; ?></td>
    <td><?php echo $row->nama ?></td>
    <td><?php echo $row->jenis_kelamin ?></td>
    <td><?php echo $row->nama_perusahaan ?></td>
   </tr>
  <?php endforeach ?>
 </table>
</body>
</html>