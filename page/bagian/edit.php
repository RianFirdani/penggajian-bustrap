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

$data = $koneksi->query("SELECT * FROM bagian WHERE id = '$id'")->fetch_array();



?>

<body>
    <h2 style="margin-top:20px; margin-bottom: 20px; text-align: center;">Edit Data Bagian</h2>

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
                <label class="col-4" style="color : white;">Nama :</label>
                <div class="col-8">
                    <input name="nama" class="form-control" type="text" placeholder="NAMA HARUS DI ISI";  value="<?= $data['nama']?>">
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