<?php
include 'koneksi.php';
$dbsayur = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Customer</title>
    <link rel="stylesheet" type="text/css" href="../sayur/styles.css">
</head>
<body>
    <div class="all">
    <div class="header">
        <h1>TOKO SAYUR</H1>
    </div>

    <div class="nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu_sayur.php">Menu Sayur</a></li>
            <li><a href="menu_customer.php">Menu Customer</a></li>
            <li><a href="menu_transaksi.php">Menu Transaksi</a></li>
        </ul>
    </div>
    <center>
        <div class="box">
    <h2 style="text-align: center; margin-bottom: 20px">DATA CUSTOMER</h2> 
    <a href="tambahcustomer.php" style="text-align: center; margin-top:30px; margin-bottom 25px;">TAMBAH CUSTOMER</a>
    <table border="1" cellspacing="0" cellpaadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
    <tr>
        <th>No</th>
        <th>Nama Customer</th>
        <th>No HP</th>
        <th>Alamat</th>

    </tr>
    <?php
    $no=1;
    foreach($dbsayur->tampilcustomer() as $x ){
    ?>
    <tr>
        <td><?php echo $no ++?></td>
        <td><?php echo $x ['nama_customer'];?></td>
        <td><?php echo $x ['no_hp'];?></td>
        <td><?php echo $x ['alamat'];?></td>

    </tr>
  <?php
}?>
    </table>
    </center>
</div>
</body>
</html>