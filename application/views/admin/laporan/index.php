<body>
	<div class="container">
	<div class="panel-group">
	<div class="panel panel-danger">
	<div class="panel-heading"></div>
	<div class="panel_body">
	<br>
	<center>
	<div class="row-fluid">
	<button type="button" class="btn btn-danger" id="laporanSemua" onclick="view_laporan_semua();">Semua Data</button>
	<button type="button" class="btn btn-success" id="laporanPelatihan" onclick="serachByJenis('Pelatihan',<?= Date('Y-m-d') ?>, <?= date('Y-m-d') ?>);">Laporan Divisi Pelatihan</button>
	<button type="button" class="btn btn-info" id="laporanPengujian" onclick="serachByJenis('Pengujian',<?= Date('Y-m-d') ?>, <?= date('Y-m-d') ?>);">Laporan Divisi Pengujian</button>
	<button type="button" class="btn btn-warning" id="laporanRancang" onclick="serachByJenis('RancangBangun',<?= Date('Y-m-d') ?>, <?= date('Y-m-d') ?>);">Laporan Divisi Rancang Bangun</button>
	</div>
</center>
</div>
</div>
<div class="panel panel-info">
	<div class="panel heading"></div>
	<div class="panel-body">
	<br>
	<div class="input-group date row bangkit" hidden="true">
		<div class="col-md-12">
				<button class="btn btn-danger cari" id="mencari">Cari </button>
				<button type="button" class="btn btn-danger"><a id="print" href="laporan/cetak" target="_blank">Print</a></button>
		</div>
			<div class="col-md-3">
				Tanggal : 
			<input type="date" class="datepicker" id="tanggal-mulai" class="form-control"></input>	
			</div>
			S/D 
			<div class="col-md-3"> 
			<input type="date" class="datepicker" id="tanggal-akhir" class="form-control"></input>
			</div> 
		</div>
	<div id="form_laporan"></div>
</div>
</div>
</div>
</div>

</body>

<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">	
	const pelatihan = 'Pelatihan'
	const rancang = 'RancangBangun'
	const pengujian = 'Pengujian'

	$(document).on('click', '#laporanSemua', function(){
		$('.cari').attr('id', 'mencari');
		$('.bangkit').attr('hidden', false);
		$('#print').attr('hidden', true);
	});

	$(document).on('click', '#laporanPelatihan', function(){
			$('.bangkit').attr('hidden', false);
		$('#print').attr('hidden', false);
			$('.cari').attr('id', pelatihan);
	});

	$(document).on('click', '#laporanPengujian', function(){
			$('.bangkit').attr('hidden', false);
		$('#print').attr('hidden', false);
			$('.cari').attr('id', pengujian);
	});

	$(document).on('click', '#laporanRancang', function(){
			$('.bangkit').attr('hidden', false);
		$('#print').attr('hidden', false);
			$('.cari').attr('id', rancang);
	});

	$(document).on('click', '#mencari', function(){
		let awal = $('#tanggal-mulai').val();
		let akhir = $('#tanggal-akhir').val();
		searchByDate(awal,akhir);
	});

	$(document).on('click', '#Pelatihan', function(){
		let awal = $('#tanggal-mulai').val();
		let akhir = $('#tanggal-akhir').val();
		serachByJenis(pelatihan,awal,akhir);
	});

	$(document).on('click', '#Pengujian', function(){
		let awal = $('#tanggal-mulai').val();
		let akhir = $('#tanggal-akhir').val();
		serachByJenis(pengujian,awal,akhir);
	});

	$(document).on('click', '#RancangBangun', function(){
		let awal = $('#tanggal-mulai').val();
		let akhir = $('#tanggal-akhir').val();
		serachByJenis(rancang,awal,akhir);
	});

	 $(document).on('click', '#print', function(){
	    let url = $('#print').attr('href')
	    $('#print').attr('href', url)
	 	let awal = $('#tanggal-mulai').val();
	    if(!awal){
	        awal = 'null'
	    }
		let akhir = $('#tanggal-akhir').val();
	    if(!akhir){
	        akhir = 'null'
	    }

	    // if(awal || akhir == 'null'){
	    // 	alert('Tanggal Tidak boleh kosong');
	    // }
	    let jenis = $('.cari').attr('id')
	    if(jenis == 'mencari'){
	        jenis = 'null'
	    }
	    let data = url+'/'+awal+'/'+akhir+'/'+jenis
	    $('#print').attr('href', data)
	    location.reload();
	   })

	function view_laporan_semua(){
		$.ajax({
			url:'<?= site_url('admin/laporan/view_semua_laporan')?>',
			dataType: 'html',
			type: 'POST',
			success: function(data){
				$('#form_laporan').html(data);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				if(XMLHttpRequest.status === 200){
					alert(textStatus+ 'errorna' +errorThrown);
				}else{
					alert('Terjadi Kesalahan server')
				}
			}
		});
	};

	function searchByDate(awal, akhir){
		$.ajax({
			url:'<?= site_url('admin/laporan/view_by_tanggal/') ?>'+awal+'/'+akhir ,
			dataType: 'html',
			type: 'POST',
			success: function(data){
				$('#form_laporan').empty().html(data);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				if(XMLHttpRequest.status === 200){
					alert(textStatus+ 'errorna' +errorThrown);
				}else{
					alert('Terjadi Kesalahan server')
				}
			}
		});
	};	

	function serachByJenis(jenis, awal, akhir){
		$.ajax({
			url:'<?= site_url('admin/laporan/view_by_jenis/') ?>'+jenis+'/'+awal+'/'+akhir ,
			dataType: 'html',
			type: 'POST',
			success: function(data){
				$('#form_laporan').empty().html(data);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				if(XMLHttpRequest.status === 200){
					alert(textStatus+ 'errorna' +errorThrown);
				}else{
					alert('Terjadi Kesalahan server')
				}
			}
		});
	};

</script>
