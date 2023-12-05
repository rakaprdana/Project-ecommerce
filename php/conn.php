<?php
$host = "localhost";
$username = "kopitara1";
$password = "12345";
$database = "db_kopitara";


$conn = mysqli_connect($host, $username, $password, $database);
echo "OK";
if (!$conn) {
    die("Koneksi gagal dibangun: " . mysqli_connect_error());
}

if (!mysqli_select_db($conn, $database)) {
    die("Database tidak dapat dibuka: " . mysqli_error($conn));
}
?>
