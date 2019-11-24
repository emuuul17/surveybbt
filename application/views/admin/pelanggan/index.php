
<?php if($this->session->flashdata('success')) : ?>
    <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
<?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
    <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
<?php endif; ?>

<br>
<span>
    <button type="button" class="btn btn-info" id="cari">Cari</button>
    <button type="button" class="btn btn-danger"><a id="print" href="pelanggan/cetak" target="_blank">Print</a></button>
</span>
<br><br>
<div class="row col-md-12">
    <div class="col-md-3">
        Nama
        <input type="text" name="nama" id="nama">
    </div>    
    <div class="col-md-3">
        Jenis Kelamin 
        <select name="jenis_jasa" id="kelamin">
                                <option value="">Select</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
        </select>
    </div>
    <div class="col-md-3">
        Perusahaan
        <input type="text" name="nama" id="perusahaan">
    </div> 
    <div class="col-md-3">
        Alamat
        <input type="text" name="nama" id="alamat">
    </div>   
</div>
<br>
<div class="row col-md-12">
    <div class="col-md-3">
        Kota  : 
        <input type="text" name="nama" id="kota">
    </div> 
    <div class="col-md-3">
        Provinsi
        <input type="text" name="nama" id="provinsi">
    </div>   
    <div class="col-md-3">
        No. Telepon
        <input type="text" name="nama" id="no_tlp">
    </div>  
    <div class="col-md-3">
        Jenis
        <select name="jenis_jasa" id="jenis">
                                <option value="">Select</option>
                                <option value="Pengujian">Pengujian</option>
                                <option value="Pelatihan">Pelatihan</option>
                                <option value="RancangBangun">Rancang Bangun</option>
        </select>
    </div>
</div>
<br>

<div class="card mb-3" id="form_data">
    <div class="card-header text-white bg-primary ">
    <i class="fa fa-list"></i><b> Data Responden</b>
	    </div>
    <div class="card-body table-responsive table-hover" >
        <?php if($ListData) : ?>
            <table class="table table-bordered" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama Perusahaan / Personal</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Provinsi</th>
                    <th>No. Telepon</th>
                    <th>Jenis Pelayanan Teknis</th>
                    <th>Tanggal</th>
                </tr>
        <?php 
        $i = 1;
        foreach($ListData as $daftar) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?= $daftar['nama']; ?></td>
                    <td><?= $daftar['jenis_kelamin']; ?></td>
                    <td><?= $daftar['nama_perusahaan']; ?></td>
                    <td><?= $daftar['alamat']; ?></td>
                    <td><?= $daftar['kota']; ?></td>
                    <td><?= $daftar['provinsi']; ?></td>
                    <td><?= $daftar['no_tlp']; ?></td>
                    <td><?= $daftar['jenis_jasa']; ?></td>
                    <td><?= date('d-M-Y', strtotime($daftar['tanggal'])) ?></td>
                    <!-- <td> -->
                        <!-- <?= anchor('admin/pelanggan/show/'.$daftar['id'].'', '<i class="fas fa-search-plus" aria-hidden="true"></i>', 'class="btn btn-sm btn-primary"'); ?>
                        <?= anchor('admin/pelanggan/delete/'.$daftar['id'].'', '<i class="fa fa-trash" aria-hidden="true"></i>', array('class="btn btn-sm btn-danger"','onclick'=>"return confirm('Yakin untuk menghapus data ini?')")); ?> -->                                               
                        
                        <!-- <a href="#myModal" class="btn btn-sm btn-danger" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                    <!-- </td> -->
                    </tr>
        <?php 
        $paging=(!empty($pagermessage) ? $pagermessage : '');
        $i++;
            endforeach; 
            echo "<tr><td colspan='9'><div style='background:000;'>$paging &nbsp;".$this->pagination->create_links()."</div></td></tr>";
            ?>
                </table>
        <?php else : ?> 
            <p>No Data</p>
        <?php endif; ?>
        </div>

<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript"> 
    const pelatihan = 'Pelatihan'
    const rancang = 'RancangBangun'
    const pengujian = 'Pengujian'

    $(document).ready(function(){
    let nama = $('#nama').val()
    let kelamin = $('#kelamin').val()
    let perusahaan = $('#perusahaan').val()
    let alamat = $('#alamat').val()
    let kota = $('#kota').val()
    let provinsi = $('#provinsi').val()
    let tlp = $('#no_tlp').val()
    let jenis = $('#jenis').val()
    let anjing = $('#print').attr('href')
    let coba = anjing+'/'+nama
    $('#print').attr('href', coba)
        console.log(coba)

    })
   

    $(document).on('click', '#cari', function(){
    let nama = $('#nama').val()
    let kelamin = $('#kelamin').val()
    let perusahaan = $('#perusahaan').val()
    let alamat = $('#alamat').val()
    let kota = $('#kota').val()
    let provinsi = $('#provinsi').val()
    let tlp = $('#no_tlp').val()
    let jenis = $('#jenis').val()

        search(nama, kelamin, perusahaan, alamat, kota, provinsi, tlp, jenis)
    })

     $(document).on('click', '#print', function(){
    let nama = $('#nama').val()
    if(!nama){
        nama = 'null'
    }
    let kelamin = $('#kelamin').val()
    if(!kelamin){
        kelamin = 'null'
    }
    let perusahaan = $('#perusahaan').val()
    if(!perusahaan){
        perusahaan = 'null'
    }
    let alamat = $('#alamat').val()
    if(!alamat){
        alamat = 'null'
    }
    let kota = $('#kota').val()
    if(!kota){
        kota = 'null'
    }
    let provinsi = $('#provinsi').val()
    if(!provinsi){
        provinsi = 'null'
    }
    let tlp = $('#no_tlp').val()
    if(!tlp){
        tlp = 'null'
    }
    let jenis = $('#jenis').val()
    if(!jenis){
        jenis = 'null'
    }
    let url = $('#print').attr('href')
    let data = url+nama+'/'+kelamin+'/'+perusahaan+'/'+alamat+'/'+kota+'/'+provinsi+'/'+tlp+'/'+jenis
    $('#print').attr('href', data)
    location.reload();
    })

    function search(nama, kelamin, perusahaan, alamat, kota, provinsi, tlp, jenis){
        $.ajax({
            url:'<?= site_url('admin/pelanggan/search/') ?>',
            // dataType: 'html',
            type: 'POST',
            data: {nama:nama, kelamin: kelamin, perusahaan: perusahaan, alamat: alamat, kota: kota, provinsi: provinsi, tlp: tlp, jenis: jenis},
            success: function(data){
                $('#form_data').empty().html(data);
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

    function cetak(nama, kelamin, perusahaan, alamat, kota, provinsi, tlp, jenis){
        $.ajax({
            url:'<?= site_url('admin/pelanggan/cetak') ?>',
            dataType: 'html',
            type: 'POST',
            data: {nama:nama, kelamin: kelamin, perusahaan: perusahaan, alamat: alamat, kota: kota, provinsi: provinsi, tlp: tlp, jenis: jenis},
            success: function(data){
                console.log(data)
                // return true
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
    