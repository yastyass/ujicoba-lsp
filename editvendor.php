<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_vendor = $_POST['id_vendor'];
    $nama_vendor = $_POST['nama_vendor'];
    $kontak = $_POST['kontak'];
    $nama_barang = $_POST['nama_barang'];
    
        $sql = "UPDATE vendor SET nama_vendor='$nama_vendor', kontak='$kontak', nama_barang='$nama_barang' WHERE id_vendor='$id_vendor'";
    
        if ($koneksi ->query($sql) === TRUE) {
            echo "Data Berhasil Diupdate";
            header("Location: vendor.php");
        } else {
            echo "Error updating record: " . $koneksi->error;
        }
    
        $koneksi->close();
     } else {
        $id_vendor = $_GET['id'];
        $sql = "SELECT * FROM vendor WHERE id_vendor='$id_vendor'";
        $result = $koneksi->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Record not found!";
        }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vendor</title>
</head>
<body>
    <h3>Edit Vendor</h3>
    <form action="editvendor.php" method="post">
    <input type="hidden" name="id_vendor" value="<?php echo $row['id_vendor']; ?>">
        Nama Vendor :
        <input type="text" name="nama_vendor" value="<?php echo $row['nama_vendor']; ?>">
        <br></br>
        Kontak Vendor :
        <input type="text" name="kontak" value="<?php echo $row['kontak']; ?>">
        <br></br>
        Nama Barang :
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>">
        <br></br>
        <button type="submit" class="submit" name="submit">Edit</button>
</form>
</body>
</html>