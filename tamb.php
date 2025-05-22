<?php
include("config/controller.php");
if (isset($_POST['tambah'])){
    if(create_buku($_POST)> 0){
    echo"<script>alert('Data Berhasil di Tambahkan'); document.location.href='Buk.php';</script>";
    } else{
    echo"<script>alert('Data Gagal di Tambahkan'); document.location.href='Buk.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
</head>
<body style="background-color:rgb(19, 8, 105);">
    <h1 class="text-center" style="color:rgb(89, 150, 188) ;">Tambah Buku</h1>
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
    <div class="card h-100, p-3 mb-2 bg-info text-dark" style="width: 18rem;" >
        <div class="card-body">
        <form action="" method="POST">
            <label for="id_kategori">id_kategori</label>
            <input type="text" name="id_kategori" required>      
            <label for="judul_buku">judul_buku</label>
            <input type="text" name="judul_buku" required>           
            <label for="pengarang">pengarang</label>
            <input type="text" name="pengarang" required>           
            <label for="tahun_terbit">tahun_terbit</label>
            <input type="text" name="tahun_terbit" required>           
            <label for="jumlah_buku">jumlah_buku</label>
            <input type="text" name="jumlah_buku" required>           
            
            <div class="container d-flex justify-content-center align-items-center min-vh-80">
            <button type="submit" type="button" name="tambah" class="btn btn-success" value="Tambah user">Submit</button>
        </div>
        </form>
        </div>
    </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
    <button type="button" class="btn btn-danger"><a href="Buk.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </div>
    
</body>
</html>