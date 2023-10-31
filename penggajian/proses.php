<?php
include_once '../../config/config.php';
include_once '../../config/koneksi.php';

if (isset($_POST['simpan'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tanggal_mulai= $_POST['tanggal_mulai'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $status_karyawan = $_POST['status_karyawan'];
    $bagian_id = $_POST['bagian_id'];

    $submit = $koneksi ->query("Insert into karyawan values (
        '$nik',
        '$nama',
        '$tanggal_mulai',
        '$gaji_pokok',
        '$status_karyawan',
        '$bagian_id'
    )");
    if ($submit) {
            
        echo'<script>Alert("Data Berhasil Disimpan")</script>';
        header("location:../karyawan");
    }else {
        
    }
}else if(isset($_POST['edit'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tanggal_mulai= $_POST['tanggal_mulai'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $status_karyawan = $_POST['status_karyawan'];
    $bagian_id = $_POST['bagian_id'];

    $submit = $koneksi ->query("Update karyawan SET
        nik ='$nik',
        nama ='$nama',
        tanggal_mulai = '$tanggal_mulai',
        gaji_pokok = '$gaji_pokok',
        status_karyawan = '$status_karyawan',
        bagian_id = '$bagian_id'
        WHERE
        nik = '$nik';
    ");
    // var_dump($submit , $koneksi->error);
    if ($submit) {
            
        echo'<script>Alert("Data Berhasil Diubah")</script>';
        header("location:../karyawan");

}else {
    echo'<script>Alert("Data gagal Diubah")</script>';
        header("location:../karyawan");
}
}else if (isset($_GET['id'])) {
    $delete = $koneksi ->query("Delete from karyawan where nik = '$_GET[id]'");
    if ($delete) {
        echo'<script>Alert("Data Berhasil Dihapus")</script>';
        header("location:../karyawan");
    }else {
        echo'<script>Alert("Data Gagal Dihapus")</script>';
        header("location:../karyawan");
        
    }
}




?>