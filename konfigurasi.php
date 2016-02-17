<?php
//koneksi ke database
$url		= "http://localhost/project/SI_KELAS_SIC2014/";
$servername = "localhost";
$dbusername	= "root";
$dbpassword	= "";
$db_name	= "dbsikelas";
$conn       = new mysqli($servername, $dbusername, $dbpassword, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
