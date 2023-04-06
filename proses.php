<?php
include 'koneksi.php';
$db_sayur= new database();

$aksi =$_GET['aksi'];
if($aksi == "tambahsayur"){
    $db_sayur->tambahsayur($_POST['nama_sayur'], $_POST['harga_sayur']);
    header("location:menu_sayur.php");
}
if($aksi == "tambahcustomer"){
    $db_sayur->tambahcustomer($_POST['nama_customer'], $_POST['no_hp'], $_POST['alamat']);
    header("location:menu_customer.php");
}
if($aksi == "tambahtransaksi"){
    $db_sayur->tambahtransaksi($_POST['id_sayur'], $_POST['nama_sayur'], $_POST['id_customer'], $_POST['nama_customer'], $_POST['kuantitas'], $_POST['harga'],$_POST['total_pembayaran']);
    header("location:menu_transaksi.php");
}
elseif($aksi == "hapuspesanan"){
    $db_sayur->hapuspesanan($_GET['id_pesanan']);
    header("location:kasir.php");
}
?>