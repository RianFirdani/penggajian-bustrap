<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

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
          <div class="card-body bg-dark">
             <div class="form-group row">
                <!-- Input -->
                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">NIK :</label>
                <div class="col-8">
                    <input name="nik" class="form-control" type="text" placeholder="NIK HARUS DI ISI";>
                </div>
                </div> 
                
                <div class="row mb-3";>
                <label class="col-4" style="color : white;">Nama :</label>
                <div class="col-8">
                    <input name="nama" class="form-control" type="text" placeholder="NAMA HARUS DI ISI";>
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Tanggal Mulai :</label>
                <div class="col-8">
                    <input name="tanggal_mulai" class="form-control" type="date";>
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Gaji Pokok :</label>
                <div class="col-8">
                    <input name="gaji_pokok" class="form-control" type="number";>
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Status Karyawan :</label>
                <div class="col-8">
                    <select class="form-control select" name="status_karyawan" id="">
                        <option value="---Pilih---">---Pilih---</option>
                        <option value="TETAP">TETAP</option>
                        <option value="KONTRAK">KONTRAK</option>
                        <option value="MAGANG">MAGANG</option>
                    </select>
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Bagian :</label>
                <div class="col-8">
                    <select class="form-control" name="bagian_id" id="">
                    <option value="---Pilih---">---Pilih---</option>
                    <?php
                     $bagian = $koneksi ->query("SELECT * FROM bagian");

                     foreach($bagian as $row){

                     
                    ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                    <?php }?>
                    </select>
                </div>
                </div> 
             </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn bg-primary" name="simpan">SIMPAN</button>
        </div>
        </form>
    </section>
    <!--footer-->
  
    <!--End card-->
   <?php
    include '../../templates/script.php';
   ?>
</body>


</html>
<script>
  new DataTable('#example');
</script>