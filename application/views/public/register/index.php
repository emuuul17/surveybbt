<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!DOCTYPE html>
 <head>
   <meta charset="UTF-8">
   <title>
     Register Akun
   </title>

   <style>
 body
 {
 margin:50px;
 font-family:Arial;
 background:#eee;
 }
 #wrap
 {
 margin:auto;
 width:auto;
 border:5px solid #ccc;
 padding:5px;
 background:#fff;
 box-shadow:4px 4px 10px 2px #888;
 }
 #content
 {
 padding:3px;
 }
 #content h2
 {
 font-size:22px;
 font-weight:bold;
 color:#FF9900;
 }
 .t_reg
 {
 padding:4px;
 }
 .t_reg tr td
 {
 font-size:12px;
 font-weight:bold;
 }
 .teks
 {
 padding:5px;
 border:1px #ccc solid;
 }
 .teksarea
 {
 padding:5px;
 border:1px #ccc solid;
 }
 .tombol
 {
 padding:5px;
 background:#cc0000;
 color:#fff;
 border:1px solid #fff;
 font-size:11px;
 font-weight:bold;
 }
 #footer
 {
 font-size:11px;
 margin:auto;
 margin-top:20px;
 text-align:center;
 }
 #footer a
 {
 text-decoration:none;
 color:#000;
 font-weight:bold;
 }
 </style>

 </head>
 <body>
 <div id="wrap">
 <div id="content">
     <h2>Pendaftaran Workshop</h2>

     <?php echo form_open('public/register/index');?>

	 <table>

     <tr>  <td>Nama</td>  <td>:</td>
     <td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>"/></td>
     <td> <?php echo form_error('nama'); ?> </td></tr>

     <tr><td>Email</td><td>:</td>
     <td><input type="text" name="email" value="<?php echo set_value('email'); ?>"/></td>
     <td> <?php echo form_error('email'); ?> </td> </tr>

     <tr><td>Nama Perusahaan/Personal</td><td>:</td>
     <td><textarea type="text" name="company_person" value="<?php echo set_value('company_person'); ?>" rows="2" cols="15"></textarea></td>
     <td> <?php echo form_error('company_person'); ?> </td></tr>

     <tr><td>Jumlah Personal</td><td>:</td>
     <td><input type="text" name="jumlah_personal" value="<?php echo set_value('jumlah_personal'); ?>"/></td>
     <td> <?php echo form_error('jumlah_personal'); ?> </td></tr>
     
     <tr><td>Jenis Pelatihan / Judul Pelatihan</td><td>:</td>
     <td><input type="text" name="jenis_pelatihan" value="<?php echo set_value('jenis_pelatihan'); ?>"/></td>
     <td> <?php echo form_error('jenis_pelatihan'); ?> </td></tr>

     <tr><td>Tanggal</td>  <td>:</td>
     <td><div class="input-group date">
     <input type="date" class="datepicker" name="tanggal_event" class="form-control">
     </div></td>
     <td> <?php echo form_error('tanggal_event'); ?> </td></tr>
          
     <tr><td>Pembayaran</td><td>:</td>
     <td><select name="pembayaran" id="pembayaran">
     <option value="">Select</option>
     <option value="Tunai">Tunai</option>
     <option value="Transfer">Transfer</option>
     </select> <font color="#FF0000"><?php echo form_error('pembayaran');?></font></td>
     </tr>

	 <tr></tr><tr></tr><tr></tr>
     <tr><td></td><td></td>  <td>
     <input type="submit" name="btnSubmit" value="Daftar" />
     </td></tr>

     <?php echo form_close();?>

     <tr><td>
     Kembali ke beranda, Silakan klik <?= anchor('', 'Beranda', 'title="Beranda"');?>
     </td></tr>
	 </table>
	</div>
	</div>

<div id="footer">
 Antawijaya Training Center © 2019

Created by

<a href="http://google.com" target="_blank">Day-Team</a>
</div>
 </body>
 </html>
