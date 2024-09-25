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
    <h2>VENDOR</h2>
    <br>
    <a href="tambahvendor.php" class="submit-btn">Tambah Data</a>
    <table class="table">
      <thead>
        <tr>
          <th>Nama Vendor</th>
          <th>Kontak</th>
          <th>Nama Barang</th>
          <th>Actions</th>
        </tr>
      </thead>
        <?php
        include "koneksi.php";
        $dbuser = "SELECT * FROM vendor";
        $hasil_dbuser = mysqli_query($koneksi, $dbuser);
        if (!$hasil_dbuser) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        while ($data = mysqli_fetch_assoc($hasil_dbuser)) {
            echo "<tr>";
            echo "<td>$data[nama_vendor]</td>";
            echo "<td>$data[kontak]</td>";
            echo "<td>$data[nama_barang]</td>";
            echo "<td>
                      <a href='editvendor.php?id={$data['id_vendor']}' class='action-btn'>Edit</a>
                      / <a href='deletevendor.php?id={$data['id_vendor']}' class='action-btn'>Hapus</a>
                  </td>";
            echo "</tr>"; // Close the table row
        }
?>        
        
        </tbody>
    </table>
</div>

</body>
</html>