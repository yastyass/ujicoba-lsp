<?php
include "koneksi.php";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_barang = $_POST['id_barang'];  // Fix the name to match form input
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $harga = $_POST['harga'];
    $kuantitas_stok = $_POST['kuantitas_stok'];
    $lokasi = $_POST['id_gudang'];
    $serial_number = $_POST['serial_number'];
    $vendor = $_POST['id_vendor'];

    // Update query
    $sql = "UPDATE inventory SET
            nama_barang = '$nama_barang',
            jenis_barang = '$jenis_barang',
            harga = '$harga',
            kuantitas_stok = '$kuantitas_stok',
            id_gudang = '$lokasi',
            serial_number = '$serial_number',
            id_vendor = '$vendor'
            WHERE id_barang = '$id_barang'";
        
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Record updated successfully!'); window.location.href = 'inventory.php';</script>";
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "<script>alert('Error updating record: " . $koneksi->error . "');</script>";
    }

    $koneksi->close();
} else {
    // Fetch the existing data
    $id_barang = $_GET['id'];
    $sql = "SELECT * FROM inventory WHERE id_barang='$id_barang'";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('Record not found!'); window.location.href = 'inventory.php';</script>";
        exit(); // Ensure no further code is executed if record is not found
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventory</title>
</head>
<body>
    <h3>Edit Inventory</h3>
    <form action="editinvent.php" method="post">
        <input type="hidden" name="id_barang" value="<?php echo htmlspecialchars($row['id_barang']); ?>">

        Nama Vendor:
        <?php
        $id_vendor_terpilih = htmlspecialchars($row['id_vendor']);
        $query = mysqli_query($koneksi, "SELECT * FROM vendor");
        ?>
        <select name="id_vendor">
            <option value=""></option>
            <?php
            while ($data = mysqli_fetch_array($query)) {
                $selected = ($data['id_vendor'] == $id_vendor_terpilih) ? 'selected' : '';
                echo '<option value="'.$data['id_vendor'].'" '.$selected.'>'.$data['nama_vendor'].'</option>';
            }
            ?>
        </select>
        <br><br>
        Nama Barang:
        <?php
        $id_vendor_terpilih = htmlspecialchars($row['id_vendor']);
        $query = mysqli_query($koneksi, "SELECT * FROM vendor");
        ?>
        <select name="id_vendor">
            <option value=""></option>
            <?php
            while ($data = mysqli_fetch_array($query)) {
                $selected = ($data['id_vendor'] == $id_vendor_terpilih) ? 'selected' : '';
                echo '<option value="'.$data['id_vendor'].'" '.$selected.'>'.$data['nama_barang'].'</option>';
            }
            ?>
        </select>
        <br><br>
        Jenis Barang:
        <input type="text" name="jenis_barang" value="<?php echo htmlspecialchars($row['jenis_barang']); ?>">
        <br><br>
        Harga Barang:
        <input type="text" name="harga" value="<?php echo htmlspecialchars($row['harga']); ?>">
        <br><br>
        Kuantitas Stok:
        <input type="text" name="kuantitas_stok" value="<?php echo htmlspecialchars($row['kuantitas_stok']); ?>">
        <br><br>
        Lokasi Gudang:
        <?php
        // Fetch storage unit data
        $id_gudang_terpilih = htmlspecialchars($row['id_gudang']);
        $query = mysqli_query($koneksi, "SELECT * FROM storage_unit");
        ?>
        <select name="id_gudang">
            <option value=""></option>
            <?php
            while ($data = mysqli_fetch_array($query)) {
                $selected = ($data['id_gudang'] == $id_gudang_terpilih) ? 'selected' : '';
                echo '<option value="'.$data['id_gudang'].'" '.$selected.'>'.$data['lokasi_gudang'].'</option>';
            }
            ?>
        </select>
        <br><br>
        Serial Number:
        <input type="text" name="serial_number" value="<?php echo htmlspecialchars($row['serial_number']); ?>">
        <br><br>
        <button type="submit" class="submit" name="submit">Edit</button>
    </form>
</body>
</html>
