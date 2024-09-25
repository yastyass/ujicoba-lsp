<?php
if($_POST){
    $nama_vendor = $_POST['nama_vendor'];
    $kontak = $_POST['kontak'];
    $nama_barang = $_POST['nama_barang'];
    if(empty($nama_vendor)){
        echo "<script>alert('Nama Vendor Tidak Boleh Kosong');location.href='tambahvendor.php';</script>";
    } elseif(empty($kontak)){
        echo "<script>alert('Kontak Tidak Boleh Kosong');location.href='tambahvendor.php';</script>";
    } elseif(empty($nama_barang)){
            echo "<script>alert('Nama Barang Tidak Boleh Kosong');location.href='tambahvendor.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($koneksi,"INSERT INTO vendor (nama_vendor, kontak, nama_barang) values ('".$nama_vendor."','".$kontak."','".$nama_barang."')")
        or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses Menambah Vendor Baru');location.href='vendor.php';</script>";
        } else {
            echo "<script>alert('Gagal Menambah Vendor Baru');location.href='vendor.php';</script>";
        }
    }
}
?>