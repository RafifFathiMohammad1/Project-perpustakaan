<?php
    include ('config/controller.php'); //fungsi menambahkan php controller
    //sql menampilkan
    $data_masuk = select("SELECT * FROM masuk WHERE Level= 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
</head>
<body style="background-color:black;">

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
          <a class="nav-link" aria-current="page" href="Petugas.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Bukp.php">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="DSisp.php">siswa</a>
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
 
<div class="container">
        <h1 class="text-center" style="color: #f15748 ;">Daftar Siswa</h1>
        <br><br>
        <table class="table table-dark table-striped table-bordered border-light">
        <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Asli</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_masuk as $masuk) :?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $masuk['Name'];?></td>
                        <td><?= $masuk['Username'];?></td>
                        <td><?= $masuk['Password'];?></td>
                        <td><?= $masuk['Level'];?></td>
                        <td><?= $masuk['Status'];?></td>
                        <td>
                        <button type="button" class="btn btn-danger"><a href="hapususerS.php?id=<?=$masuk['ID']; ?>" onclick="return confirm('Yakin ingin menghapus produk ini?')" style="text-decoration: none; color: white;">Hapus</a></button>
                        <button type="button" class="btn btn-warning"><a href="ubahuserS.php?ID=<?=$masuk['ID']; ?>" style="text-decoration: none; color: white;">Ubah</a></button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
</div>
</body>
</html>