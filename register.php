<?php
include 'koneksi.php';

session_start();

if (isset($_SESSION['username'])) {
  header("Location: index.php");
}

if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($connect, $sql);
  if (!$result->num_rows > 0) {
    $sql = "INSERT INTO user (fullname, username, email, password) VALUES ('$fullname','$username', '$email', '$password')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
      echo "<script>
        alert('Register berhasil, silahkan login')
        window.location.href='login.php';
      </script>";
    } else {
      echo "<script>alert('Gagal Register, Terjadi kesalahan.')</script>";
    }
  } else {
    echo "<script>alert('Gagal Register, Email Sudah Terdaftar.')</script>";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="container my-5">
    <form action="" method="POST">
      <h1 class="h3 mb-3 fw-normal text-center">Create New Account</h1>

      <div class="form-floating my-3">
        <input type="text" class="form-control" id="floatingFullname" name="fullname" required>
        <label for="floatingFullname">Fullname</label>
      </div>
      <div class="form-floating my-3">
        <input type="text" class="form-control" id="floatingUsername" name="username" required>
        <label for="floatingUsername">Username</label>
      </div>
      <div class="form-floating my-3">
        <input type="email" class="form-control" id="floatingInput" name="email" required>
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating my-3">
        <input type="password" class="form-control" id="floatingPassword" name="password" required>
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Register</button>
    </form>
    <p class="text-center my-3">Already have an account? <a href="login.php">Login</a></p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>