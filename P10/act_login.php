<?php 

session_start();
include "koneksi.php";
$user = $_POST['username'];
$psw = md5($_POST['psw']);
$op = $_GET['op'];

if ($op=="in") {  
    $query_1="select * from register where username='$user' and password='$psw'";
    $h_1 = $koneksi->query($query_1);
    if (mysqli_num_rows($h_1)==1) {
        $d_1 = $h_1->fetch_array();
        $_SESSION['username'] = $d_1['username'];
        $_SESSION['level'] = $d_1['level'];
        if ($d_1['level'] == "Admin") {
            header("location:admin.php");
        }elseif ($d_1['level'] == "Pengguna") {
            header("location:pengguna.php");
        }else{
            die("password salah <a href=\"javascript:history.back()\">Kembali</a>");
        }
    }
}else if ($op=="out") {
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:formlogin.html");
}
?>