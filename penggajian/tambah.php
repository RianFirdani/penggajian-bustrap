<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">
    <title>Tambah Data Karyawan</title>

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php'
?>
<!-- End Navbar -->

<body>
    <h2 style="margin-top:20px; margin-bottom: 20px; text-align: center;">Tambah Data Karyawan</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
            <div class="card">
                 <div class="card-body" style="background-color:grey">
                    <div class="form-group row">
                        <!-- input -->
                        <label class="col-2"> <b>NIK</b> </label>
                        <div class="col-6">
                            <input name="nik" class="form-control" type="text" placeholder="Isikan NIK" >
                        </div>
                    <div class="row mt-3">
                    <label class="col-2"> <b>Nama</b> </label>
                        <div class="col-6">
                            <input name="nama" class="form-control" type="text" placeholder="Isikan Nama" >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-2"><b>Tanggal Mulai</b></label>
                        <div class="col-4">
                            <Input class="form-control" name="tanggal_mulai" type="date">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-2"><b>Gaji Pokok</b></label>
                        <div class="col-4">
                            <Input class="form-control" name="gaji_pokok" type="number" placeholder="Isikan Gaji Pokok">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-2"><b>Status Karyawan</b></label>
                        <div class="col-4">
                            <select name="status_karyawan" id="" class="form-control">
                                <option value="">-----Pilih-----</option>
                                <option value="Tetap">Tetap</option>
                                <option value="kontrak">Kontrak</option>
                                <option value="magang">Magang</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-2"><b>Bagian</b></label>
                        <div class="col-4">
                            <select name="bagian_id" id="" class="form-control">
                            <option value="">-----Pilih-----</option>
                               <?php
                                $bagian = $koneksi ->query("select*from bagian");

                                foreach($bagian as $row){

                               ?> 
                               <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>



                        
                    </div>
                        <!-- end input -->
                 </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                    <button type="reset" class="btn btn-danger" name="ulang">Ulang</button>
            </div>
     </form>
    </section>
    <!--End card-->
   <?php
    include '../../templates/script.php';
   ?>
</body>


</html>
<script>
  new DataTable('#example');
</script>