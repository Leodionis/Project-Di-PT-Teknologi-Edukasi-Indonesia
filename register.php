<?php 
include 'php/koneksi.php';
if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $db = "INSERT INTO users (nama_lengkap,nomor_whatsapp,email_aktif,password)
    VALUES ('$nama','$whatsapp','$email','$password')
    ";
    try {
        if($conn->query($db)){
            header("Location: login.html");
        }else{
            echo "Data Gagal Input";
        }
    } catch (mysqli_sql_exception) {
        echo "data sudah ada";
    }
}

?>