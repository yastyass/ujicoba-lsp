<?php
$koneksi = mysqli_connect('localhost','root','','db_inventoryy');

if(!$koneksi){
    die("koneksi gagal". mysqli_connect_error(). mysqli_connect_errno());
}
?>