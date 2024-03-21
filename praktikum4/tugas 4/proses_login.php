<?php
//Tangkap input login
$email =$_POST["email"];
$password =$_POST["password"];

//validasi login
if ($email == 'faisya@gmail.com' && $password == '123456'){
    header('Location: dashboard.php');
} else {
    echo "Email atau Password Tidak Valid";
}