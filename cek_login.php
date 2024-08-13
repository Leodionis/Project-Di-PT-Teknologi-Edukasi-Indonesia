<?php
include "php/koneksi.php";
session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $db = "SELECT * FROM users WHERE email_aktif = '$email'";
    $res = $conn->query($db);
    if($res->num_rows > 0){
        $data = $res -> fetch_assoc();
        $_SESSION['username'] = $data['nama_lengkap'];
        header("Location: index.php");
    }
}
?>