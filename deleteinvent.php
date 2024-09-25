<?php
include "koneksi.php";
    $id_inventory = $_GET['id'];

    $sql = "DELETE FROM inventory WHERE id_barang='$id_inventory'";
    
    if ($koneksi ->query($sql) === TRUE) {
        echo "Data Berhasil Dihapus";
        header("Location: inventory.php");
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();
?>

