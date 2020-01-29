<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pegawai Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

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
                        <h3><b><u>DATA PEGAWAI TAHUN</u></b>  <?php echo "$ambilthn"; ?></h3><<br><br>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No</th>
                                    <th>NIP</th>
                                    <th>Nama Pegawai</th>
                                    <th>Tempat & Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Bidang</th>
                                    <th>Jabatan</th>
                                    <th>Golongan</th>
                                    <th>No. HandPhone</th>
                                    <th>Foto</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pegawai WHERE substr(tgl_masuk,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                     <td><?= $nomor ?></td>
                                    <td><?= $data['nip'] ?></td>
                                    <td><?= $data['nm_pegawai'] ?></td>
                                    <td><?= $data['ttl'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['bidang'] ?></td>
                                    <td><?= $data['jabatan'] ?></td>
                                    <td><?= $data['golongan'] ?></td>
                                    <td><?= $data['nohp'] ?></td>
                                    <td><img src= "../foto/<?= $data['nama_file']?>" style='height:70px; width:70px'>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="12" class="text-right">
                                        <br><br>Tanjung Balai, <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
