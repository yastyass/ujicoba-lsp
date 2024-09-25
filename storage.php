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
    <h2>STORAGE</h2>
    <br>
    <a href="tambahstorage.php" class="submit-btn">Tambah Data</a>
    <table class="table">
      <thead>
        <tr>
          <th>Nama Gudang</th>
          <th>Lokasi Gudang</th>
          <th>Actions</th>
        </tr>
      </thead>
        <?php
        include "koneksi.php";
        $dbuser = "SELECT * FROM storage_unit";
        $hasil_dbuser = mysqli_query($koneksi, $dbuser);
        if (!$hasil_dbuser) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        while ($data = mysqli_fetch_assoc($hasil_dbuser)) {
            echo "<tr>";
            echo "<td>$data[nama_gudang]</td>";
            echo "<td>$data[lokasi_gudang]</td>";
            echo "<td>
                      <a href='editstorage.php?id={$data['id_gudang']}' class='action-btn'>Edit</a>
                      / <a href='deletestorage.php?id={$data['id_gudang']}' class='action-btn'>Hapus</a>
                  </td>";
            echo "</tr>"; // Close the table row
        }
?>        
        
        </tbody>
    </table>
</div>

</body>
</html>