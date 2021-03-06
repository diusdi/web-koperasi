<?php
session_start();
include('koneksi/koneksi.php');

if(isset($_GET["halaman"])){
    $halaman = $_GET["halaman"];
    if($halaman=="konfirmasi-login"){
      include("halaman/konfirmasi-login.php");
    }
    else if($halaman=="keluar"){
      include("halaman/sign-out.php");
    }
    // konfirmasi manajemen profil
    else if($halaman=="konfirmasi-edit-profil"){
      include("halaman/konfirmasi-edit-profil.php");
    }else if($halaman=="konfirmasi-password"){
      include("halaman/konfirmasi-password.php");
    // konfirmasi pendaftaran
    }else if($halaman=="konfirmasi-daftar"){
      include("halaman/konfirmasi-sign-in.php");
    // konfirmasi manajemen pengumuman
    }else if($halaman=="konfirmasi-tambah-info"){
      include("halaman/konfirmasi-tambah-pengumuman.php");
    }else if($halaman=="konfirmasi-edit-info"){
      include("halaman/konfirmasi-edit-pengumuman.php");
    //konfirmasi transaksi
    }else if($halaman=="konfirmasi-nabung"){
      include("halaman/konfirmasi-tabungan.php");
    //konfirmasi ambil hutang
    }else if($halaman=="konfirmasi-pinjam"){
      include("halaman/konfirmasi-bayar-pinjaman.php");
    }else if($halaman=="konfirmasi-ambil"){
      include("halaman/konfirmasi-ambil-pinjaman.php");
    }
    
  }
?>

<!DOCTYPE html>
<html>
<!-- head -->
  <head>
  <?php include("includes/head.php"); ?>  
  </head>
<!-- head -->
   
  <?php
    //cek ada get include 
    if(isset($_GET["halaman"])){
      $halaman = $_GET["halaman"];
      // cek apakah ada session id admin
      if(isset($_SESSION["id_user"])){
  ?>
  <body>
    <div id="app">
      <!-- sidebar -->
      <?php include("includes/sidebar.php"); ?>
      <!-- sidebar -->

      <!-- isi -->
      <div id="main">
        <!-- header -->
        <header class="mb-3">
        <?php include("includes/header.php");?>
        </header>
        <!-- header -->

        <!-- konten -->
        <?php
            if($halaman=="beranda"){
                include("halaman/beranda.php");
            }else if($halaman=="pengaturan-user"){
                include("halaman/pengaturan-user.php");
            //manajemen tabungan
            }else if($halaman=="tabungan"){
                include("halaman/tabungan.php");
            }else if($halaman=="ambil-dana"){
              include("halaman/ambil-tabungan.php");
            //manajemen pinjaman
            }else if($halaman=="pinjaman"){
              include("halaman/pinjaman.php");
            }else if($halaman=="ambil-pinjam"){
              include("halaman/ambil-pinjaman.php");
            //manajemen riwayat
            }else if($halaman=="riwayat"){
              include("halaman/riwayat.php");
            //manajemen riwayat
            }else if($halaman=="detail-proses"){
              include("halaman/detail-transaksi.php");
            //manajemen admin
            }else if($halaman=="atur-admin"){
              include("halaman/pengaturan-admin.php");
            }else if($halaman=="tambah-admin"){
              include("halaman/tambah-admin.php");
            }else if($halaman=="edit-admin"){
              include("halaman/edit-admin.php");
            }else if($halaman=="detail-admin"){
              include("halaman/detail-admin.php");
          //manajemen profil 
            }else if($halaman=="profil"){
              include("halaman/profil.php");
            }else if($halaman=="edit-profil"){
              include("halaman/edit-profil.php");
            }else if($halaman=="ganti-sandi"){
              include("halaman/ubah-pass.php");
            
          //manajemen pengumuman
            }else if($halaman=="info"){
              include("halaman/pengumuman.php");
            }else if($halaman=="tambah-info"){
              include("halaman/tambah-pengumuman.php");
            }else if($halaman=="edit-info"){
              include("halaman/edit-pengumuman.php");
            }else if($halaman=="detail-info"){
              include("halaman/detail-pengumuman.php");
            
          //manajemen anggota
            }else if($halaman=="atur-user"){
              include("halaman/pengaturan-user.php");
            }else if($halaman=="detail-member"){
              include("halaman/detail-user.php");
            }
        ?>
        
        <!-- footer -->
        <footer>
        <?php include("includes/footer.php"); ?>
        </footer>
        <!-- footer -->
      </div>
    </div>
     <!-- konten -->

    <!-- script -->
    <?php include("includes/script.php"); ?>
    <!-- script -->
  </body>
  <?php
  
  }else if($halaman=="daftar"){
    include("halaman/signin.php");
  }else if($halaman=="sukses"){
    include("halaman/sukses-sign-in.php");
  }else{
    //pemanggilan halaman form login
      include("halaman/login.php");
  	}  
  }else{
  if(isset($_SESSION['id_user'])){
  //pemanggilan ke halaman-halaman profil jika ada session  ?>
   <body>
    <div id="app">
      <!-- sidebar -->
      <?php include("includes/sidebar.php"); ?>
      <!-- sidebar -->

      <!-- isi -->
      <div id="main">
        <!-- header -->
        <header class="mb-3">
        <?php include("includes/header.php");?>
        </header>
        <!-- header -->

        <!-- konten -->
        <?php
            include("halaman/beranda.php");
        ?>
        
        <!-- footer -->
        <footer>
        <?php include("includes/footer.php"); ?>
        </footer>
        <!-- footer -->
      </div>
    </div>
     <!-- konten -->

    <!-- script -->
    <?php include("includes/script.php"); ?>
    <!-- script -->
  </body>
  <?php
  }else{
  //pemanggilan halaman form login
    include("halaman/login.php");
  } 
}
?>
</html>
