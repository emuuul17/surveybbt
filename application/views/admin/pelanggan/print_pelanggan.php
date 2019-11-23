<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
		<table>
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Nama Perusahaan</th>
				<th>Alamat</th>
				<th>Kota</th>
				<th>Provinsi</th>
				<th>No Telp</th>
				<th>Jenis Jasa</th>
				<th>Tanggal</th>
			</tr>

			<?php
			$id=1;
			foreach ($pelanggan as $pl): ?> 
			<tr>
				<td><?php echo $id++ ?></td>
				<td><?php echo $pl->nama ?></td>
				<td><?php echo $pl->jenis_kelamin ?></td>
				<td><?php echo $pl->nama_perusahaan ?></td>
				<td><?php echo $pl->alamat ?></td>
				<td><?php echo $pl->kota ?></td>
				<td><?php echo $pl->provinsi ?></td>
				<td><?php echo $pl->no_tlp ?></td>
				<td><?php echo $pl->jenis_jasa ?></td>
				<td><?php echo $pl->tanggal ?></td>	
			</tr>

		<?php endforeach; ?>	
		</table>

		<script type="text/javascript">
			window.print();
		</script>
</body>
</html>