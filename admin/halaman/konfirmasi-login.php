<?php
      //mengambil input user dari form
      // include("../koneksi/koneksi.php");
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        $username = mysqli_real_escape_string($koneksi, $user);
        $password = mysqli_real_escape_string($koneksi, MD5($pass));
        
      //mengambil data dari database
        $sql="select `id_admin`, `level`, `username`, `password` from `admin` 
                where `username`='$username' and
               `password`='$password'";
        $query = mysqli_query($koneksi, $sql);  
        while($data = mysqli_fetch_row($query)){
          $id_user = $data[0];
          $level = $data[1]; 
          $userDb = $data[2];
          $passDb = $data[3];
          
        }
        
        //pengecekan salah/benar input
        if(($username != $userDb ) || ($password != $passDb)){
          header("Location:login_salah");       
        }else{
          
          $_SESSION['id_user']=$id_user;
          $_SESSION['level']=$level;
          header("Location:beranda");
        }
?>
