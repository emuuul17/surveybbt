<div class="banner-bottom py-2 my-lg-5">
	<div class="container">
		<h3 class="heading text-center text-capitalize font-weight-bold mb-5">J A D W A L </h3>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead></thead>
				<td>Pilih Bulan</td>
				<td>
					<form method="POST" action="<?php echo base_url(); ?>jadwalBulan/">
						<select name="bulan" id="bulan">
							<a href=""></a>
							<option value="">Pilih Bulan</option>
							<option value="01">Januari</option>
							<option value="02">Februari</option>
							<option value="03">Maret</option>
							<option value="04">April</option>
							<option value="05">Mei</option>
							<option value="06">Juni</option>
							<option value="07">Juli</option>
							<option value="08">Agustus</option>
							<option value="09">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</select>
						<input type="submit" value="Cari">
						<font color="#FF0000"><?php echo form_error('bulan'); ?></font>
					</form>
				</td>

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
							<?php foreach ($jadwal as $j) : ?>
								<td><?= $j->judul ?></td>
								<td><?= $j->tanggal ?></td>
								<td><?= $j->durasi ?></td>
								<td><?= $j->pembicara ?></td>
							</tr>
							<tr>
							<?php endforeach; ?>
					</tbody>
			</table>
		</div>
	</div>
</div>