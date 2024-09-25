<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id_vendor = $_GET['id'];

    $delete_query = "DELETE FROM vendor WHERE id_vendor = '$id_vendor'";
    
    if (mysqli_query($koneksi, $delete_query)) {
        echo "<script>alert('Data berhasil dihapus!');location.href='vendor.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus: " . mysqli_error($koneksi) . "');location.href='deletevendor.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan!');location.href='deletevendor.php';</script>";
}

mysqli_close($koneksi);
?>
