<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post"  enctype="multipart/form-data">
                         <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" value="<?= $data['nip'] ?>" class="form-control" id="inputEmail3" placeholder="Inputkan NIP" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nm_pegawai" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nm_pegawai" value="<?= $data['nm_pegawai'] ?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="ttl" class="col-sm-3 control-label">Tempat & Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="ttl" value="<?= $data['ttl'] ?>" class="form-control" id="inputEmail3" placeholder="Kota, Tanggal Lahir" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jk" class="form-control" value="<?= $data['jk'] ?>">
                                    <option>-Pilih-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                               <textarea class="form-control" placeholder="Inputkan Alamat Lengkap" name="alamat" value="<?= $data['alamat'] ?>"></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" value="<?= $data['tgl_masuk'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bidang" class="col-sm-3 control-label">Bidang</label>
                            <div class="col-sm-6">
                                <select name="bidang" class="form-control" value="<?= $data['bidang'] ?>">
                                    <option>-Pilih-</option>
                                    <option>-</option>
                                    <option value="Pendidikan Non Formal dan Informal">Pendidikan Non Formal dan Informal</option>
                                    <option value="TK/PAUD">TK/PAUD</option>
                                    <option value="Kesetaraan">Kesetaraan</option>
                                    <option value="Sarana Prasarana dan Kelembagaan">Sarana, Prasarana dan Kelembagaan</option>
                                    <option value="Pendidikan Dasar">Pendidikan Dasar</option>
                                    <option value="Sekolah Dasar">Sekolah Dasar</option>
                                    <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                                    <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                                    <option value="PTK PAUD, Pendidikan Non Formal dan Informal">PTK PAUD, Pendidikan Non Formal dan Informal</option>
                                    <option value="PTK SD/SMP/SMA">PTK SD/SMP/SMA</option>
                                    <option value="Kebudayaan">Kebudayaan</option>
                                    <option value="Perlengkapan">Perlengkapan</option>
                                    <option value="Kepegawaian">Kepegawaian</option>
                                    <option value="Program">Program</option>
                                    <option value="Keuangan">Keuangan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                               <div class="col-sm-6 col-xs-9">
                                <select name="jabatan" class="form-control" value="<?= $data['jabatan'] ?>">
                                    <option>-Pilih-</option>
                                    <option value="Kepala Dinas">Kepala Dinas</option>
                                    <option value="KASUBBAG">KASUBBAG</option>
                                    <option value="KASI">KASI</option>
                                    <option value="PEGAWAI">PEGAWAI</option>
                                    <option value="HONORER">HONORER</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="golongan" class="col-sm-3 control-label">Golongan</label>
                               <div class="col-sm-3 col-xs-9">
                                <select name="golongan" class="form-control" value="<?= $data['golongan'] ?>">
                                    <option value="I A">I A</option>
                                    <option value="I B">I B</option>
                                    <option value="I C">I C</option>
                                    <option value="I D">I D</option>
                                    <option value="II A">II A</option>
                                    <option value="II B">II B</option>
                                    <option value="II C">II C</option>
                                    <option value="II D">II D</option>
                                    <option value="III A">III A</option>
                                    <option value="III B">III B</option>
                                    <option value="III C">III C</option>
                                    <option value="III D">III D</option>
                                    <option value="IV A">IV A</option>
                                    <option value="IV B">IV B</option>
                                    <option value="IV C">IV C</option>
                                    <option value="IV D">IV D</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nohp" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nohp" value="<?= $data['nohp'] ?>" class="form-control" id="inputEmail3" placeholder="Inputkan No HP" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="foto" class="col-sm-3 control-label">Foto</label>
                            <div class="col-sm-9">
                                <input type="file" name="fupload" class="form-control" value="<?= $data['file'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-save"></span> Update Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pegawai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if ($_POST) {
    $nip = $_POST['nip'];
    $nm_pegawai = $_POST['nm_pegawai'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $bidang = $_POST['bidang'];
    $jabatan = $_POST['jabatan'];
    $golongan = $_POST['golongan'];
    $nohp =  $_POST['nohp'];
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file   = $_FILES['fupload']['name'];
    $ukuran_file = $_FILES['fupload']['size'];

    $direktori   = "foto/$nama_file";
    //buat sql
    $sql="UPDATE pegawai SET nip='$nip',nm_pegawai='$nm_pegawai',ttl='$ttl',jk='$jk',alamat='$alamat',tgl_masuk='$tgl_masuk',bidang='$bidang',jabatan='$jabatan',golongan='$golongan',nohp='$nohp',nama_file='$nama_file',ukuran_file='$ukuran_file',direktori='$direktori' WHERE nip=$id";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL UPDATE Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }



?>



