<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prosestambah_invent.php" method="post">
        <h2>Tambah Barang Baru</h2>

        <label for="id_vendor">Nama Vendor: </label>
        <select id="id_vendor" name="id_vendor" required>
            <option value="">Pilih Nama Vendor</option>
            <?php
            include "koneksi.php";
            $query_nama_vendor = mysqli_query($koneksi, "SELECT * FROM vendor");
            if (!$query_nama_vendor) {
                die('Error: ' . mysqli_error($koneksi));
            }
            while ($data = mysqli_fetch_array($query_nama_vendor)) {
                echo '<option value="'.$data['id_vendor'].'">'.$data['nama_vendor'].'</option>';
            }
            ?>
        </select>
        <br><br>
        <label for="id_vendor">Nama Barang: </label>
        <select id="id_vendor" name="nama_barang" required>
            <option value="">Pilih Nama Barang</option>
            <?php
            include "koneksi.php";
            $query_nama_barang = mysqli_query($koneksi, "SELECT * FROM vendor");
            if (!$query_nama_barang) {
                die('Error: ' . mysqli_error($koneksi));
            }
            while ($data = mysqli_fetch_array($query_nama_barang)) {
                echo '<option value="'.$data['id_vendor'].'">'.$data['nama_barang'].'</option>';
            }
            ?>
        </select>
        <br><br>
        Jenis Barang :
        <input type="text" name="jenis_barang"  value="">
        <br><br>
        Harga :
        <input type="text" name="harga"  value="">
        <br><br>
        Kuantitas Stok :
        <input type="text" name="kuantitas_stok"  value="">
        <br><br>
        <label for="id_gudang">Lokasi Gudang: </label>
        <select id="id_gudang" name="id_gudang" required>
            <option value="">Pilih Lokasi Gudang</option>
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM storage_unit");
            if (!$query) {
                die('Error: ' . mysqli_error($koneksi));
            }
            while ($data = mysqli_fetch_array($query)) {
                echo '<option value="'.$data['id_gudang'].'">'.$data['lokasi_gudang'].'</option>';
            }
            ?>
        </select>
        <br><br>
        Serial Number :
        <input type="text" name="serial_number"  value="">
        <br><br>
        <input type="submit" name="submit" value="submit"></input>
        </form>
    </body>
</html>