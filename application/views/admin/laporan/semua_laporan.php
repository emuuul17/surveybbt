<form>
	<div class="row-fluid">
		<div class="span12">
			<div class="box">
				<div class="box-content">
					<table width="100%" class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Jenis</th>
								<th>Pertanyaan 1</th>
								<th>Pertanyaan 2</th>
								<th>Pertanyaan 3</th>
								<th>Pertanyaan 4</th>
								<th>Pertanyaan 5</th>
								<th>Pertanyaan 6</th>
								<th>Pertanyaan 7</th>
								<th>Tanggal Survey</th>
							</tr>
						</thead>
						<tbody>
							<?php
							// var_dump($laporan);die;
							$i = 1;
							foreach ($laporan as $value) {
							 ?>
							<tr>
								<td><?php echo $i++; ?></td>	
								<td><?= $value['nama'] ?></td>	
								<td><?= $value['jenis_jasa'] ?></td>	
								<td><?= $value['pertanyaan_1'] ?></td>	
								<td><?= $value['pertanyaan_2'] ?></td>	
								<td><?= $value['pertanyaan_3'] ?></td>	
								<td><?= $value['pertanyaan_4'] ?></td>	
								<td><?= $value['pertanyaan_5'] ?></td>	
								<td><?= $value['pertanyaan_6'] ?></td>	
								<td><?= $value['pertanyaan_7'] ?></td>	
								<td><?= $value['tanggal_pendaftaran'] ?></td>	
							</tr>
							<?php };  ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</form>

