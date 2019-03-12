
<div class="banner-bottom py-2 my-lg-5">
	<div class="container">
	<h3 class="heading text-center text-capitalize font-weight-bold mb-5">J A D W A L </h3>
    <div class="table-responsive">          
    <table class="table table-hover">
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