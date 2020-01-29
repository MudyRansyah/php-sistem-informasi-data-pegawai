<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pegawai</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pegawai WHERE nip='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Pegawai Dinas Pendidikan Tanjung Balai </h2>
                        <h4>Jl. Gaharu, Sirantau, Tanjung Balai Selatan<br>
                        Kota Tanjung Balai, Sumatera Utara, Kode Pos : 21332</h4>
                        <hr>
                        <h3><b><u>DATA PEGAWAI</u></b></h3>
                    </div>
                    <br><br>
                </div>
                        <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src= "../foto/<?= $data['nama_file']?>"  style='height:400px; width:300px'>
                            </div>
                        
                        <div class="col-sm-8">
                        <table class="table table-striped">
                        <tr>
                        
                            <td width="20%">NIP</td> 
                            <td><?= $data['nip'] ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td> 
                            <td><?= $data['nm_pegawai'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat & Tanggal Lahir</td>
                            <td><?= $data['ttl'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> 
                            <td><?= $data['jk'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td>
                            <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
                        <tr>
                            <td>Bidang</td>
                            <td><?= $data['bidang'] ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><?= $data['jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Golongan</td>
                            <td><?= $data['golongan'] ?></td>
                        </tr>
                        <tr>
                            <td>No Handphone</td>
                            <td><?= $data['nohp'] ?></td>
                        </tr>
                        <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        <br><br>Tanjungbalai,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
                                                 </td>
                                </tr>
                            </tfoot>
                    </table>
                
            </table></div></div></div></div>
    </body>
</html>