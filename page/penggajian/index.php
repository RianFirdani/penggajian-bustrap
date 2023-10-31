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
    <h2 style="margin-top:20px; margin-bottom: 20px; text-align: center;">Karyawan</h2>

    <!--card-->
    <section class="container">
        <div class="card">
          <div class="card-header">
            <a href="tambah.php" class="btn bg-primary" style="color:white">Tambah</a>
          </div>
          <div class="card-body";>


        
            <table class="table" id="example" class="table table-striped">
  <thead class ="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">karyawan_nik</th>
      <th scope="col">tahun</th>
      <th scope="col">bulan</th>
      <th scope="col">gaji_bayar</th>
      <th scope="col">opsi</th>
   

    </tr>
  </thead>
  <tbody>
    <?php
    
    $penggajian = $koneksi->query("select* from penggajian ORDER BY id DESC");
      while($data = $penggajian->fetch_array()){
    
    ?>
    <tr>

      <td><?= $data['id'] ?></td>
      <td><?= $data['karyawan_nik'] ?></td>
      <td><?= $data['tahun'] ?></td>
      <td><?= $data['bulan'] ?></td>
      <td><?= $data['gaji_bayar'] ?></td>
      <td>
      <a href="edit?id=<?= $data['id']?>" class="btn bg-success" style="color:white">Edit</a>
      <a href="proses?id=<?= $data['id']?>" class="btn bg-danger" style="color:white">Hapus</a>
      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
        </div>
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