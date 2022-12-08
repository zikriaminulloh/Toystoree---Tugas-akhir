<?php 
    session_start();
    include 'koneksi.php';
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $pengacak = "p3ng4c4k";
    $passmd = md5 ($pengacak . md5($password));
    $login = mysqli_query($koneksi,"SELECT* FROM tb_login WHERE email='$email' and password='$passmd'");
    $cek = mysqli_num_rows($login);

    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        if($passmd == $data['password'] && $data['level']=="admin"){
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "admin";
            header("location: home_admin.php");

        }else if($passmd == $data['password'] && $data['level']=="user"){
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "user";
            header("location: home_user.php");

    }else{
        echo "<script>alert('Login Gagal');window.location='login.php';</script>";
}
    }else{
        echo "<script>alert('Login Gagal');window.location='login.php';</script>";
}

?>