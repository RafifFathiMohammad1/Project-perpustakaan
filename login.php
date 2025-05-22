<?php
    session_start();
    include ('config/controller.php'); //fungsi menambahkan php controller

    // Periksa apakah form login disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['Username'];
  $password = $_POST['Password'];

  // Query untuk mengecek apakah username dan password cocok
  $query = "SELECT * FROM masuk WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) > 0) {
    $user = $result->fetch_assoc();
      // Jika login berhasil, buat session dan alihkan ke halaman menu

      $_SESSION['Username'] = $user['Username'];
      $_SESSION['Level'] = $user['Level'];

    if ($user['Level'] == 3){
      header("Location: admin.php");
    }
    elseif ($user['Level'] == 2){
      header("Location: Petugas.php");
    }
    elseif ($user['Level'] == 1){
      header("Location: siswa.php");
    }
    exit;

  } else {
      // Jika login gagal, tampilkan pesan error
      echo "<script>alert('Username atau Password salah');</script>";
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

<body style="background-color:rgb(24, 24, 24);">
<header>

<!-- The header content -->
<div class="container h-100">
    <h1 class="text-center, display-3" style="color: #f15748 ;">Login</h1>
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
    <div class="card h-100, p-3 mb-2 bg-info text-dark" style="width: 18rem;" >
        <div class="card-body">
        <form action="login.php" method="POST">       
            <label for="Username">Username</label>
            <input type="text" name="Username" required>
            <label for="Password">Password</label>
            <input type="Password" name="Password" id="SeePass" required>
            <input type="checkbox" onclick="liat()">

            <div class="container d-flex justify-content-center align-items-center min-vh-80">
            <button type="submit" class="btn btn-success">Masuk</button>
            </div>
          </form>
        </div>
         <h6 >Tidak memiliki akun?<a href="Register.php" style="text-decoration: none;">Register</a></h6>
    </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center min-vh-80">
    <button type="button" class="btn btn-danger"><a href="index.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </div>
  </div>
</div>
</header>

</body>
</html>

<script>
  function liat() {  var x = document.getElementById("SeePass");
  if (x.type === "password") {
    x.type = "text";
  } else{
    x.type = "password"
  }
}

</script>