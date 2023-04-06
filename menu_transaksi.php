<?php
require "koneksi.php";
$sql = "SELECT * FROM transaksi";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
 <link rel="stylesheet" href="styles.css">
 <script type="text/javascript" src="jquery.js"></script>
</head>

<body>
<div class="all">
<div class="header">
    <h1 class="judul">Toko Sayur</h1>
</div>
  <div class="nav">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="menu_sayur.php">Menu Sayur </a></li>
      <li><a href="menu_customer.php">Menu Customer</a></li>
      <li><a href="menu_transaksi.php">Menu Transaksi</a></li>
    </ul>
  </div>
  <center>
  <div class="box">
    <h2 style="text-align: center; margin-bottom: 20px">DATA TRANSAKSI</h2>
    <a href="tambahtransaksi.php" style="text-align: center; margin-top:30px; margin-bottom 25px;">TAMBAH TRANSAKSI</a>
    <table border="1" cellspacing="0" cellpadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
    <tr>
      <th>No</th>
      <th>ID Sayur</th>
      <th>Nama Sayur</th>
      <th>ID Customer</th>
      <th>Nama Customer</th>
      <th>Kuantitas</th>
      <th>Harga</th>
      <th>Total Harga</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)):
            $total_pembayaran = $row['kuantitas']*$row['total_pembayaran']
        ?>
        <tr>
            <td><?=$row['id_transaksi']?></td>
            <td><?=$row['id_sayur']?></td>
            <td><?=$row['nama_sayur']?></td>
            <td><?=$row['id_customer']?></td>
            <td><?=$row['nama_customer']?></td>
            <td><?=$row['kuantitas']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['total_pembayaran']?></td>
            </tr>
        <?php endwhile; ?>
   </table>
 </center>
 </div>
 </body>
 </html>