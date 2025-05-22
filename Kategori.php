<?php
    include ('config/controller.php'); //fungsi menambahkan php controller
    //sql menampilkan
    $data_kategori = select("SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
</head>
<body style="background-color:rgb(19, 8, 105);">

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#" style="color: azure;">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Kategori.php">Kategori</a>
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
</nav>

<div class="container">
        <h1 class="text-center" style="color:rgb(89, 150, 188) ;">Kategori Buku</h1>
        <button type="button" class="btn btn-success"><a href="tamkat.php" style="text-decoration: none; color: white;">Tambah</a></button>

        <br><br>
        <table class="table table-dark table-striped table-bordered border-light">
        <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_kategori as $kategori) :?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $kategori['Name'];?></td>
                        <td>
                        <button type="button" class="btn btn-danger"><a href="hapuskat.php?id_kategori=<?=$kategori['id_kategori']; ?>" onclick="return confirm('Yakin ingin menghapus produk ini?')" style="text-decoration: none; color: white;">Hapus</a></button>
                        <button type="button" class="btn btn-warning"><a href="ubahkat.php?id_kategori=<?=$kategori['id_kategori']; ?>" style="text-decoration: none; color: white;">Ubah</a></button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
</div>
</body>
</html>