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
          <div class="card-body">
          <table class="table" id="example" class="table table-striped">
  <thead class ="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Opsi</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $no=1;
    $karyawan = $koneksi->query("select* from karyawan");
      while($data = $karyawan->fetch_array()){
    
    ?>
    <tr>
      <td><?=  $no++; ?></td>
      <td><?= $data['nik'] ?></td>
      <td><a href="edit?id=<?= $data['nik'] ?>" class="btn bg-warning" style="color:white;">Edit</a>
      <a href="proses?id=<?= $data  ['nik']?>" class="btn bg-danger" style="color:white;">Hapus</a>
    </td>
      
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
          </div>

        
   
        </div>
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