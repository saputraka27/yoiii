<?php 
	include 'koneksi.php';
	$dbsayur = new database;
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../sayur/styles.css">
 </head>
 <body>
 	<div class="all">
 	<div class="head">
 		<h1>Restoran</h1>
 	</div>

 	<div class="nav">
 		<ul>
			<li><a href="home.php">Home</a></li>
            <li><a href="menusayur.php">Menu Sayur</a></li>
            <li><a href="menucustomer.php">Menu Customer</a></li>
            <li><a href="menutransaksi.php">Data Pesanan</a></li>
            <li><a href="../index.php">Logout</a></li>
	 	</ul>
 	</div>
    <div class="box">
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Menu Makanan</h2>
 	<table style="padding-center: 720px;">
        <form action="proses.php?aksi=tambahsayur" method="post">
            <tr>
                <td>Nama Sayur : </td>
                <td><input type="text" name="nama_sayur"></td>
            </tr>
            <tr>
                <td>Harga Sayur : </td>
                <td><input type="text" name="harga_sayur"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
    </div>
    </div>
 </body>
 </html>