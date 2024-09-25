<?php
if($_POST){
    $nama_gudang = $_POST['nama_gudang'];
    $lokasi_gudang = $_POST['lokasi_gudang'];
    if(empty($nama_gudang)){
        echo "<script>alert('Nama Gudang Tidak Boleh Kosong');location.href='tambahstorage.php';</script>";
    } elseif(empty($lokasi_gudang)){
        echo "<script>alert('Lokasi Gudang Tidak Boleh Kosong');location.href='tambahstorage.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($koneksi,"INSERT INTO storage_unit (nama_gudang, lokasi_gudang) values ('".$nama_gudang."','".$lokasi_gudang."')")
        or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses Menambah Gudang Baru');location.href='storage.php';</script>";
        } else {
            echo "<script>alert('Gagal Menambah Gudang Baru');location.href='storage.php';</script>";
        }
    }
}
?>