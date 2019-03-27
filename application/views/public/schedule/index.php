
<div class="banner-bottom py-2 my-lg-5">
	<div class="container">
	<h3 class="heading text-center text-capitalize font-weight-bold mb-5">J A D W A L </h3>
    <div class="table-responsive">          
    <table class="table table-hover">
		<thead></thead>
		<td>Pilih Bulan</td>
     <td><select name="bulan" id="bulan">
     <option value="">Pilih Bulan</option>
		 <option value="januari">Januari</option>
		 <option value="februari">Februari</option>
		 <option value="maret">Maret</option>
		 <option value="april">April</option>
		 <option value="mei">Mei</option>
		 <option value="juni">Juni</option>
		 <option value="juli">Juli</option>
		 <option value="agustus">Agustus</option>
		 <option value="september">September</option>
		 <option value="oktober">Oktober</option>
		 <option value="november">November</option>
		 <option value="november">Desember</option>
     </select> <font color="#FF0000"><?php echo form_error('bulan');?></font></td>
     </>

		<thead-bold>
		     <tr>
				<th>JUDUL</th>
				<th>TANGGAL</th>
				<th>DURASI</th>
				<th>PEMBICARA</th>
		    </tr>
			</thead>
				<tbody>
				  <tr>
                  <?php foreach($jadwal as $j) : ?>
                    <td><?=$j->judul?></td>
                    <td><?=$j->tanggal?></td>
                    <td><?=$j->durasi?></td>
                    <td><?=$j->pembicara?></td>
                  </tr>
      		  <tr>
              <?php endforeach; ?>
		</tbody>
		 </table>
	</div>
</div>
</div>