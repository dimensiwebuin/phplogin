<?php
include 'koneksi.php';

session_start();

if (!isset($_SESSION['username'])) {
  echo "<script>alert('Anda belum login, silahkan login terlebih dahulu')
        window.location.href='login.php';</script>";
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <div class="container-fluid">
    <div class="my-3">
      <form action="" method="POST">
        <?php echo "<h1>Halo, " . $_SESSION['username'] . "!" . "</h1>"; ?>

        <div class="input-group">
          <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>