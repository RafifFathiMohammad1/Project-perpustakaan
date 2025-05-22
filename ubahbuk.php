<?php
include 'config/controller.php';
//mengambil id produk
if (isset ($_GET['id'])){
    $id = (int)$_GET['id'];
    $buku = select("SELECT * FROM buku WHERE id=$id")[0];
}
    if (isset($_POST['ubah'])){
        if(ubah_Buku($_POST) > 0){
            echo "<script>alert('Data Berhasil di ubah'); document.location.href='buk.php';</script>";
        }else{
            echo "<script>alert('Data gagal di ubah'); document.location.href='buk.php';</script>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
</head>
<body style="background-color:rgb(19, 8, 105);">
<h1 class="text-center" style="color:rgb(89, 150, 188) ;">Ubah Buku</h1>
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
        <div class="card h-100, p-3 mb-2 bg-info text-dark" style="width: 18rem;" >
        <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $buku ['id'];?>">
            <label for="Name">id_kategori</label>
            <input type="text" name="id_kategori" value="<?= $buku ['id_kategori'];?>" required>
            <label for="Name">judul_buku</label>
            <input type="text" name="judul_buku" value="<?= $buku ['judul_buku'];?>" required>
            <label for="Name">pengarang</label>
            <input type="text" name="pengarang" value="<?= $buku ['pengarang'];?>" required>
            <label for="Name">tahun_terbit</label>
            <input type="text" name="tahun_terbit" value="<?= $buku ['tahun_terbit'];?>" required>
            <label for="Name">jumlah_buku</label>
            <input type="text" name="jumlah_buku" value="<?= $buku ['jumlah_buku'];?>" required>

            <div class="container d-flex justify-content-center align-items-center min-vh-80">
            <button type="submit" type="button" name="ubah" class="btn btn-success" value="ubah user">Ubah</button>
        </div>
        </form>
        </div>
        </div>  
    </div>  
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
    <button type="button" class="btn btn-danger"><a href="buk.php" style="text-decoration: none; color: white;">Kembali</a></button> 
    </div>
</body>
</html>