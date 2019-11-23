<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>
        Survey
    </title>

    <style>
        body {
            margin: 50px;
            font-family: Arial;
            background: #eee;
        }

        #wrap {
            margin: 2em;
            width: auto;
            border: 1px solid #0000;
            padding: 5px;
            background: #0000;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        #content {
            padding: 3px;
        }

        #content h2 {
            font-size: 22px;
            font-weight: bold;
            color: #FF9900;
        }

        .t_reg {
            padding: 4px;
        }

        .t_reg tr td {
            font-size: 12px;
            font-weight: bold;
        }

        .teks {
            padding: 5px;
            border: 1px #ccc solid;
        }

        .teksarea {
            padding: 5px;
            border: 1px #ccc solid;
        }

        .tombol {
            padding: 5px;
            background: #cc0000;
            color: #fff;
            border: 1px solid #fff;
            font-size: 11px;
            font-weight: bold;
        }

        #footer {
            font-size: 11px;
            margin: auto;
            margin-top: 20px;
            text-align: center;
        }

        #footer a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }
        .cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}

.cc-selector-2 input{
    position:absolute;
    z-index:999;
}

.visa{background-image:url(http://i.imgur.com/lXzJ1eB.png);}
.mastercard{background-image:url(http://i.imgur.com/SJbRQF7.png);}

.cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}
* { font-family:monospace; }
.cc-selector-2 input{ margin: 5px 0 0 12px; }
.cc-selector-2 label{ margin-left: 7px; }
span.cc{ color:#6d84b4 }
    </style>
    <?php $this->load->view("public/_partials/header.php") ?>
</head>

<body>
    <?php $this->load->view("public/_partials/navbar.php") ?>

    <div id="wrap" class="container-fluid p-3 mb-5 ">
        <div id="">
            <h2 class="heading text-center text-capitalize mb-2">Form Data Survey</h2>
            <?php echo form_open('public/register/index'); ?>
            <div class="col-md-11">
                
                <table>
                    <br>
                    <tr>
                        <td style="font-size: 20px">Nama</td>
                        <td style="font-size: 20px">:</td>
                        <td style="font-size: 20px"><input type="text" name="nama" value="<?php echo set_value('nama'); ?>" /></td>
                        <td style="font-size: 20px"> <?php echo form_error('nama'); ?> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 20px">Jenis Kelamin</td>
                        <td style="font-size: 20px">:</td>
                        <td style="font-size: 20px"><select name="jenis_kelamin" id="jenis_kelamin">
                                <option value="">Select</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                              </select>
                            <font color="#FF0000"><?php echo form_error('jenis_kelamin'); ?></font>
                        </td>
                    </tr>

                    <tr>
                        <td style="font-size: 20px">Nama Perusahaan / Personal</td>
                        <td style="font-size: 20px">:</td>
                        <td style="font-size: 20px"><input type="text" name="nama_perusahaan" value="<?php echo set_value('nama_perusahaan'); ?>" /></td>
                        <td style="font-size: 20px"> <?php echo form_error('nama_perusahaan'); ?> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 20px">Alamat</td>
                        <td style="font-size: 20px">:</td>
                        <td style="font-size: 20px"><input type="text" name="alamat" value="<?php echo set_value('alamat'); ?>" /></td>
                        <td style="font-size: 20px"> <?php echo form_error('alamat'); ?> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 20px">Kota</td>
                        <td style="font-size: 20px">:</td>
                        <td style="font-size: 20px"><input type="text" name="kota" value="<?php echo set_value('kota'); ?>" /></td>
                        <td style="font-size: 20px"> <?php echo form_error('kota'); ?> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 20px">Provinsi</td>
                        <td style="font-size: 20px">:</td>
                        <td style="font-size: 20px"><input type="text" name="provinsi" value="<?php echo set_value('provinsi'); ?>" /></td>
                        <td style="font-size: 20px"> <?php echo form_error('provinsi'); ?> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 20px">No Telp</td>
                        <td style="font-size: 20px">:</td>
                        <td style="font-size: 20px"><input type="text" name="no_tlp" value="<?php echo set_value('no_tlp'); ?>" /></td>
                        <td style="font-size: 20px"> <?php echo form_error('no_tlp'); ?> </td>
                    </tr>

                    <tr>
                        <td style="font-size: 20px">Jenis Jasa Pelayanan Teknik</td>
                        <td style="font-size: 20px">:</td>
                        <td style="font-size: 20px"><select name="jenis_jasa" id="jenis_jasa">
                                <option value="">Select</option>
                                <option value="Pengujian">Pengujian</option>
                                <option value="Pelatihan">Pelatihan</option>
                                <option value="RancangBangun">Rancang Bangun</option>
                            </select>
                            <font color="#FF0000"><?php echo form_error('jenis_jasa'); ?></font>
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <!--    <p>A simple mod:</p> -->
  <!--   <div class="cc-selector-2">
        <input id="visa2" type="radio" name="creditcard" value="visa" />
        <label class="drinkcard-cc visa" for="visa2"></label>
        <input  checked="checked" id="mastercard2" type="radio" name="creditcard" value="mastercard" />
        <label class="drinkcard-cc mastercard"for="mastercard2"></label>
    </div> -->
                        </td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="font-size: 20px">
                            <input type="submit" class="btn-primary" name="btnSubmit" value="Daftar" />
                        </td>
                    </tr>

                    <?php echo form_close(); ?>
                </table>
            </div>

        </div>
    </div>
</body>

</html>
<?php $this->load->view("public/_partials/footer.php") ?>
<?php $this->load->view("public/_partials/js.php") ?> 