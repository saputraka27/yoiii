<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sayur";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("koneksi error;". mysqli.connect.error());
}
?>
  <?php
    class database{
        var $host = 'localhost';
        var $name = 'root';
        var $pw = '';
        var $db = 'db_sayur';
        

        function __construct(){
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_select_db($koneksi, $this->db);
        }
        // koneksi barang
        function tampilsayur(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM sayur");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
            }   

        // koneksi tambah barang 
        function tambahsayur($nama_sayur, $harga_sayur){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO sayur VALUES('', '$nama_sayur', '$harga_sayur')");
        }

        // koneksi customer 
        function tampilcustomer(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM customer");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
        }
        return $hasil;
        }
        // koneksi tambah customer
        function tambahcustomer($nama_customer, $no_hp, $alamat){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO customer VALUES('', '$nama_customer', '$no_hp', '$alamat')");
        }
        // koneksi transaksi 
        function tampiltransaksi(){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
            while($d = mysqLi_fetch_array($data)){
                $hasil[] = $d;
        }
        return $hasil;
        }
        // koneksi tambah transaksi
        function tambahtransaksi($id_sayur, $nama_sayur, $id_customer, $nama_customer,$kuantitas,  $harga, $total_pembayaran){
            $koneksi = mysqLi_connect($this->host, $this->name, $this->pw, $this->db);
            mysqLi_query($koneksi, "INSERT INTO transaksi VALUES('', '$id_sayur', '$nama_sayur', '$id_customer', '$nama_customer', '$kuantitas', '$harga', '$total_harga')");
        }
    }
?>