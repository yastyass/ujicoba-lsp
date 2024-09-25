<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id_gudang = $_GET['id'];

    $delete_query = "DELETE FROM storage_unit WHERE id_gudang = '$id_gudang'";
    
    if (mysqli_query($koneksi, $delete_query)) {
        echo "<script>alert('Data berhasil dihapus!');location.href='storage.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus: " . mysqli_error($koneksi) . "');location.href='dashboardstorage.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan!');location.href='dashboardstorage.php';</script>";
}

mysqli_close($koneksi);
?>
