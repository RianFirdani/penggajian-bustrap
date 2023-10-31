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
      <th scope="col">No</th>
      <th scope="col">nik</th>
      <th scope="col">nama</th>
      <th scope="col">gaji_pokok</th>
      <th scope="col">tanggal_mulai</th>
      <th scope="col">status_karyawan</th>
      <th scope="col">bagian_id</th>
      <th scope="col">opsi</th>
   

    </tr>
  </thead>
  <tbody>
    <?php
    $no=1;
    $karyawan = $koneksi->query("select* from karyawan ORDER BY nik DESC");
      while($data = $karyawan->fetch_array()){
    
    ?>
    <tr>
      <td><?=  $no++; ?></td>
      <td><?= $data['nik'] ?></td>
      <td><?= $data['nama'] ?></td>
      <td><?= $data['gaji_pokok'] ?></td>
      <td><?= $data['tanggal_mulai'] ?></td>
      <td><?= $data['status_karyawan'] ?></td>
      <td><?= $data['bagian_id'] ?></td>
      <td>
      <a href="edit?id=<?= $data['nik']?>" class="btn bg-success" style="color:white">Edit</a>
      <a href="proses?id=<?= $data['nik']?>" class="btn bg-danger" style="color:white">Hapus</a>
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