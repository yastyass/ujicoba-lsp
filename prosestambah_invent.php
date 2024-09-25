<?php
if($_POST){
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $harga = $_POST['harga'];
    $kuantitas_stok = $_POST['kuantitas_stok'];
    $id_gudang = $_POST['id_gudang'];
    $serial_number = $_POST['serial_number'];
    $id_vendor = $_POST['id_vendor'];
    if(empty($nama_barang)){
        echo "<script>alert('Nama Barang Tidak Boleh Kosong');location.href='tambahinvent.php';</script>";
    } elseif(empty($jenis_barang)){
        echo "<script>alert('Jenis Barang Tidak Boleh Kosong');location.href='tambahinvent.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('Harga Tidak Boleh Kosong');location.href='tambahinvent.php';</script>";
    } elseif(empty($kuantitas_stok)){
        echo "<script>alert('Kuantitas Stok Tidak Boleh Kosong');location.href='tambahinvent.php';</script>";
    } elseif(empty($id_gudang)){
        echo "<script>alert('ID Gudang Tidak Boleh Kosong');location.href='tambahinvent.php';</script>";
    } elseif(empty($serial_number)){
        echo "<script>alert('Serial Number Tidak Boleh Kosong');location.href='tambahinvent.php';</script>";
    } elseif(empty($id_vendor)){
        echo "<script>alert('ID Vendor Tidak Boleh Kosong');location.href='tambahinvent.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($koneksi,"INSERT INTO inventory (nama_barang, jenis_barang, kuantitas_stok, serial_number, id_gudang, harga, id_vendor) values
        ('".$nama_barang."','".$jenis_barang."','".$kuantitas_stok."','".$serial_number."','".$id_gudang."','".$harga."','".$id_vendor."')")
        or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses Menambah Barang Baru');location.href='inventory.php';</script>";
        } else {
            echo "<script>alert('Gagal Menambah Barang Baru');location.href='inventory.php';</script>";
        }
    }
}
?>