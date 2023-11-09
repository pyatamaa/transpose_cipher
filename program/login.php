<?php
require "config.php";
require "cipher/encrypt.php";
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Proses Login</title>
</head>

<body>
  <div class="container mt-5">

    <div class="row justify-content-center">
      <div class="col-md-6">
        <?php
        session_start();
        $user = encrypt($username, $key, true);
        $pass = encrypt($password, $key, true);
        $sql = "SELECT * FROM users WHERE username = '$user' ";
        $query = $db->query($sql);
        $hasil = $query->fetch_assoc();
        if ($query->num_rows == 0) {
          echo '<div class="alert alert-danger text-center">Username belum terdaftar! <a href="index" >Kembali</a> </div>';
        } else {
          if ($pass != $hasil["password"]) {
            echo '<div class="alert alert-danger text-center">Password Salah! <a href="index" >Kembali</a></div>';
          } else {
            $_SESSION["username"] = $hasil["username"];
            header("location:admin/");
            $_SESSION["password"] = $hasil["password"];
            header("location:admin/");
          }
        }
        ?>
      </div>
    </div>
  </div>

</body>

</html>