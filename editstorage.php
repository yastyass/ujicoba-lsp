<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_gudang = $_POST['id_gudang'];
    $nama_gudang = $_POST['nama_gudang'];
    $lokasi_gudang = $_POST['lokasi_gudang'];

    $sql = "UPDATE storage_unit SET nama_gudang='$nama_gudang', lokasi_gudang='$lokasi_gudang' WHERE id_gudang='$id_gudang'";

    if ($koneksi ->query($sql) === TRUE) {
        echo "Data Berhasil Diupdate";
        header("Location: storage.php");
    } else {
        echo "Error updating record: " . $koneksi->error;
    }

    $koneksi->close();
 } else {
    $id_gudang = $_GET['id'];
    $sql = "SELECT * FROM storage_unit WHERE id_gudang='$id_gudang'";
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
    <title>Edit Gudang</title>
</head>
<body>
    <h3>Edit Gudang</h3>
    <form action="editstorage.php" method="post">
    <input type="hidden" name="id_gudang" value="<?php echo $row['id_gudang']; ?>">
        Nama Gudang :
        <input type="text" name="nama_gudang" value="<?php echo $row['nama_gudang']; ?>">
        <br></br>
        Lokasi Gudang :
        <input type="text" name="lokasi_gudang" value="<?php echo $row['lokasi_gudang']; ?>">
        <button type="submit" class="submit" name="submit">Edit</button>
</form>
</body>
</html>