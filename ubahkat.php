<?php
include 'config/controller.php';
//mengambil id produk
if (isset ($_GET['id_kategori'])){
    $id_kategori = (int)$_GET['id_kategori'];
    $kategori = select("SELECT * FROM kategori WHERE id_kategori=$id_kategori")[0];
}
    if (isset($_POST['ubah'])){
        if(ubah_Kategori($_POST) > 0){
            echo "<script>alert('Data Berhasil di ubah'); document.location.href='Kategori.php';</script>";
        }else{
            echo "<script>alert('Data gagal di ubah'); document.location.href='Kategori.php';</script>";
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
            <input type="hidden" name="id_kategori" value="<?= $kategori ['id_kategori'];?>">
            <label for="Name">Nama Buku</label>
            <input type="text" name="Name" value="<?= $kategori ['Name'];?>" required>

            <div class="container d-flex justify-content-center align-items-center min-vh-80">
            <button type="submit" type="button" name="ubah" class="btn btn-success" value="ubah user">Ubah</button>
        </div>
        </form>
        </div>
        </div>  
    </div>  
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
    <button type="button" class="btn btn-danger"><a href="Kategori.php" style="text-decoration: none; color: white;">Kembali</a></button> 
    </div>
</body>
</html>