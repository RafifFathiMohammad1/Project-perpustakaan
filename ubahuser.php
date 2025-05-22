<?php
include 'config/controller.php';
//mengambil id produk
if (isset ($_GET['ID'])){
    $ID = (int)$_GET['ID'];
    $masuk = select("SELECT * FROM masuk WHERE ID=$ID")[0];
}
    if (isset($_POST['ubah'])){
        if(ubah_user_Admin($_POST) > 0){
            echo "<script>alert('Data Berhasil di ubah'); document.location.href='Dmem.php';</script>";
        }else{
            echo "<script>alert('Data gagal di ubah'); document.location.href='Dmem.php';</script>";
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
<body style="background-color:black;">
<h1 class="text-center" style="color: #f15748 ;">Ubah User</h1>
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
        <div class="card h-100, p-3 mb-2 bg-info text-dark" style="width: 18rem;" >
        <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="ID" value="<?= $masuk ['ID'];?>">
            <label for="Name">Nama User</label>
            <input type="text" name="Name" value="<?= $masuk ['Name'];?>" required>
            <label for="Username">Username</label>
            <input type="text" name="Username" value="<?= $masuk ['Username'];?>" required>
            <label for="Password">Password</label>
            <input type="text" name="Password" value="<?= $masuk ['Password'];?>" required>
            <label for="Level">Level</label>
            <input type="number" name="Level" value="<?= $masuk ['Level'];?>" required>
            <label for="Status">Status</label>
            <input type="number" name="Status" value="<?= $masuk ['Status'];?>" required>

            <div class="container d-flex justify-content-center align-items-center min-vh-80">
            <button type="submit" type="button" name="ubah" class="btn btn-success" value="ubah user">Ubah</button>
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