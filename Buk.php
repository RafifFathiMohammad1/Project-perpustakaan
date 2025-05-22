<?php
    include ('config/controller.php'); //fungsi menambahkan php controller
    //sql menampilkan
    $data_buku = select("SELECT * FROM buku");
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
          <a class="nav-link" aria-current="page" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Kategori.php">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Buk.php">Buku</a>
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
        <h1 class="text-center" style="color:rgb(89, 150, 188) ;">Buku</h1>
        <button type="button" class="btn btn-success"><a href="tamb.php" style="text-decoration: none; color: white;">Tambah</a></button>

        <br><br>
        <table class="table table-dark table-striped table-bordered border-light">
        <thead>
                <tr>
                    <th>No</th>
                    <th>id_kategori</th>
                    <th>judul_buku</th>
                    <th>pengarang</th>
                    <th>tahun_terbit</th>
                    <th>jumlah_buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_buku as $buku) :?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $buku['id_kategori'];?></td>
                        <td><?= $buku['judul_buku'];?></td>
                        <td><?= $buku['pengarang'];?></td>
                        <td><?= $buku['tahun_terbit'];?></td>
                        <td><?= $buku['jumlah_buku'];?></td>
                        <td>
                        <button type="button" class="btn btn-danger"><a href="hapusbuk.php?id=<?=$buku['id']; ?>" onclick="return confirm('Yakin ingin menghapus produk ini?')" style="text-decoration: none; color: white;">Hapus</a></button>
                        <button type="button" class="btn btn-warning"><a href="ubahbuk.php?id=<?=$buku['id']; ?>" style="text-decoration: none; color: white;">Ubah</a></button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
</div>
</body>
</html>