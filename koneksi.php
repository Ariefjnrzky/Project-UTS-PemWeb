<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portal";
$port = 3306;

//aktifin mode exception utk mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// Create connection
try {
    $koneksi = mysqli_connect($servername, $username, $password, $dbname, $port);
} catch (mysqli_sql_exception $error) {
    //kl terjadi kesalahan koneksi
    echo "Koneksi gagal: " . $error->getMessage();
}
?>