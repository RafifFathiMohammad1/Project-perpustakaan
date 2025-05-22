<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username']) || $_SESSION['level'] != 3) {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
    <link rel="stylesheet" href="style\style.css">
</head>
<body>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="admin.php" style="color: azure;">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Kategori.php">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Buk.php">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DPet.php">Petugas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DSis.php">siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Dmem.php">Kelola akun</a>
        </li>
      </ul>
    </div>
    <ul class="nav nav-pills-end">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Logout</a>
        </li>
      </ul>
  </div>
</nav>

<div class="Image">
    <div class="kartuA">
        <img src="Picture\background1.jpg" alt="background1">
        <div class="overlay-text">Halo admin!</div>
    </div>
</div>

</body>
</html>