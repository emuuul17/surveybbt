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
    LAPORAN HASIL SURVEY DIVISI RANCANG BANGUN<br>
    <b></b>
  </p>
  <table class="table table-bordered">
    <tr>
      <th>Nama</th>
      <th>Pertanyaan 1</th>
      <th>Pertanyaan 2</th>
      <th>Pertanyaan 3</th>
      <th>Pertanyaan 4</th>
      <th>Pertanyaan 5</th>
      <th>Pertanyaan 6</th>
      <th>Pertanyaan 7</th>
      <th>Tanggal Survey</th>
    </tr>
    <?php 
    $id = 1; foreach ($ListData as $row): ?>
      <tr>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['rancang_survey_1'] ?></td>
        <td><?php echo $row['rancang_survey_2'] ?></td>
        <td><?php echo $row['rancang_survey_3'] ?></td>
        <td><?php echo $row['rancang_survey_4'] ?></td>
        <td><?php echo $row['rancang_survey_5'] ?></td>
        <td><?php echo $row['rancang_survey_6'] ?></td>
        <td><?php echo $row['rancang_survey_7'] ?></td>
        <td><?php echo $row['tanggal_pendaftaran'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>

</body>
</html>