<?php
include "header.php";
include "sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="navbar">
    <div>Inventory Dashboard</div>
    <div>
      <input type="text" placeholder="Search...">
    </div>
  </div>
<div class="content">
    <!-- Inventory Table -->
    <h2>Inventory</h2>
    <br>
    <a href="tambahinvent.php" class="submit-btn">Tambah Data</a>
    <table class="table">
      <thead>
        <tr>
          <th>Nama Barang</th>
          <th>Jenis Barang</th>
          <th>Harga</th>
          <th>Kuantitas Stok</th>
          <th>Lokasi Gudang</th>
          <th>Serial Number</th>
          <th>Nama Vendor</th>
          <th>Actions</th>
        </tr>
      </thead>
        <?php
        include "koneksi.php";
        $dbuser = "SELECT * FROM inventory 
                    INNER JOIN vendor ON inventory.id_vendor = vendor.id_vendor
                    INNER JOIN storage_unit ON inventory.id_gudang = storage_unit.id_gudang";
        $hasil_dbuser = mysqli_query($koneksi, $dbuser);
        if (!$hasil_dbuser) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        while ($data = mysqli_fetch_assoc($hasil_dbuser)) {
            echo "<tr>";
            echo "<td>$data[nama_barang]</td>";
            echo "<td>$data[jenis_barang]</td>";
            echo "<td>$data[harga]</td>";
            echo "<td>$data[kuantitas_stok]</td>";
            echo "<td>$data[lokasi_gudang]</td>";
            echo "<td>$data[serial_number]</td>";
            echo "<td>$data[nama_vendor]</td>";
            echo "<td>
                      <a href='editinvent.php?id={$data['id_barang']}' class='action-btn'>Edit</a>
                      / <a href='deleteinvent.php?id={$data['id_barang']}' class='action-btn'>Hapus</a>
                  </td>";
            echo "</tr>"; // Close the table row
        }
?>        
        
        </tbody>
    </table>
</div>

</body>
</html>