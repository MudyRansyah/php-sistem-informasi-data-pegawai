<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pegawai WHERE nip ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src= "foto/<?= $data['nama_file']?>" style='height:400px; width:300px'>
                            </div>
                        <div class="col-sm-7">
                        <table class="table table-striped">
                        <tr>
                        
                            <td width="20%">NIP</td> 
                            <td><?= $data['nip'] ?></td>
                          
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
                    </table>
                </div>

            </div>
                </div>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pegawai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data Pegawai </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

