<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "belajar_bekerja";
$conn = mysqli_connect($servername,$username,$password,$db);
if($conn -> connect_error){
    die($db);
    echo "koneksi gagal";
}
?>