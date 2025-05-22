<?php
include("config/controller.php");
if (isset($_POST['tambah'])){
    if(create_user_Admin($_POST)> 0){
    echo"<script>alert('Data Berhasil di Tambahkan'); document.location.href='Dmem.php';</script>";
    } else{
    echo"<script>alert('Data Gagal di Tambahkan'); document.location.href='Dmem.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
</head>
<body style="background-color:black;">
    <h1 class="text-center" style="color: #f15748 ;">Register</h1>
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
    <div class="card h-100, p-3 mb-2 bg-info text-dark" style="width: 18rem;" >
        <div class="card-body">
        <form action="" method="POST">
            <label for="Name">Nama Asli</label>
            <input type="text" name="Name" required>           
            <label for="Username">Username</label>
            <input type="text" name="Username" required>
            <label for="Password">Password</label>
            <input type="text" name="Password" required>

            <div class="container d-flex justify-content-center align-items-center min-vh-80">
            <button type="submit" type="button" name="tambah" class="btn btn-success" value="Tambah user">Submit</button>
        </div>
        </form>
        </div>
    </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
    <button type="button" class="btn btn-danger"><a href="Dmem.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </div>
    
</body>
</html>