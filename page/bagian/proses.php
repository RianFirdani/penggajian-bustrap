<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if (isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];

  
    $submit = $koneksi->query("INSERT INTO bagian VALUES(
       '$id',
       '$nama'
    )");

    if ($submit) {
        echo  "<script>alert('Data Berhasil Di Simpan');location.href='../bagian';</script>";
        
       
    }else{
        echo  "<script>alert('Data Gagal Di Simpan');location.href='../tambah';</script>";
    }
}else if (isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
   
    $submit = $koneksi->query("UPDATE bagian SET
      id = '$id',
      nama = '$nama'
      WHERE
      id = '$id';

    ");

    if ($submit) {
        echo  "<script>alert('Data Berhasil Di Ubah');location.href='../bagian';</script>";
        
       
    }else{
        echo  "<script>alert('Data Gagal Di Ubah');location.href='../edit';</script>";
    }
} else if (isset($_GET['id'])){

    $delete = $koneksi->query("DELETE FROM bagian WHERE id = '$_GET[id]'");

if ($delete) {
    echo  "<script>alert('Data Berhasil Di Hapus');location.href='../karyawan';</script>";
    
}else{
    echo  "<script>alert('Data Gagal Di Hapus');location.href='../karyawan';</script>";
 }
}