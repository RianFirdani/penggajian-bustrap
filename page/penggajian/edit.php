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

<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM penggajian WHERE id = '$id'")->fetch_array();



?>

<body>
    <h2 style="margin-top:20px; margin-bottom: 20px; text-align: center;">Edit Data Karyawan</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
        <div class="card">
          <div class="card-body bg-dark">
             <div class="form-group row">
                <!-- Input -->
                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">ID :</label>
                <div class="col-8">
                    <input name="id" class="form-control" type="text" placeholder="ID HARUS DI ISI"; value="<?= $data['id']?>"readonly>
                </div>
                </div> 
                
                <div class="row mb-3";>
                <label class="col-4" style="color : white;">Karyawan Nik :</label>
                <div class="col-8">
                    <input name="karyawan_nik" class="form-control" type="text" placeholder="NIK HARUS DI ISI";  value="<?= $data['karyawan_nik']?>">
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Tahun :</label>
                <div class="col-8">
                    <input name="tahun" class="form-control" type="number";  value="<?= $data['tahun']?>">
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Bulan :</label>
                <div class="col-8">
                    <input name="bulan" class="form-control" type="number"; value="<?= $data['bulan']?>">
                </div>
                </div> 

                
                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Gaji Bayar :</label>
                <div class="col-8">
                    <input name="gaji_bayar" class="form-control" type="number"; value="<?= $data['gaji_bayar']?>">
                </div>
                </div> 

            
             </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn bg-primary" name="edit">Edit</button>
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