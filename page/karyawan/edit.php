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

$data = $koneksi->query("SELECT * FROM karyawan WHERE nik = '$id'")->fetch_array();



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
                <label class="col-4 mb" style="color : white;">NIK :</label>
                <div class="col-8">
                    <input name="nik" class="form-control" type="text" placeholder="NIK HARUS DI ISI"; value="<?= $data['nik']?>"readonly>
                </div>
                </div> 
                
                <div class="row mb-3";>
                <label class="col-4" style="color : white;">Nama :</label>
                <div class="col-8">
                    <input name="nama" class="form-control" type="text" placeholder="NAMA HARUS DI ISI";  value="<?= $data['nama']?>">
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Tanggal Mulai :</label>
                <div class="col-8">
                    <input name="tanggal_mulai" class="form-control" type="date";  value="<?= $data['tanggal_mulai']?>">
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Gaji Pokok :</label>
                <div class="col-8">
                    <input name="gaji_pokok" class="form-control" type="number"; value="<?= $data['gaji_pokok']?>">
                </div>
                </div> 

                <div class="row mb-3";>
                <label class="col-4 mb" style="color : white;">Status Karyawan :</label>
                <div class="col-8">
                    <select class="form-control select" name="status_karyawan" id="">
                      
                        <option value="TETAP"<?= $data['status_karyawan'] == 'TETAP'? "selected" :"" ?>>TETAP</option>
                        <option value="KONTRAK"<?= $data['status_karyawan'] == 'KONTRAK'? "selected" :"" ?>>KONTRAK</option>
                        <option value="MAGANG"<?= $data['status_karyawan'] == 'MAGANG'? "selected" :"" ?>>MAGANG</option>
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
                    <option value="<?= $row['id'] ?>"
                    <?php if ($row['id'] == $data['bagian_id']) {
                        echo "selected";
                    } ?> 
                    ><?= $row['nama'] ?></option>
                    <?php }?>
                    </select>
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