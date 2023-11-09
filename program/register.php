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
    <title>Proses Daftar</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                $user = encrypt($username, $key, true);
                $pass = encrypt($password, $key, true);
                $sql = "SELECT * FROM users WHERE username = '$user' ";
                $query = $db->query($sql);
                if ($query->num_rows != 0) {
                    echo "<div class='alert alert-warning text-center'>Username Sudah Terdaftar! <a href='index'>Kembali</a></div>";
                } else {
                    if (!$user || !$pass) {
                        echo "<div>Masih ada data yang kosong! <a href='index'>Back</a>";
                    } else {
                        $data = "INSERT INTO users VALUES (NULL, '$user', '$pass')";
                        $simpan = $db->query($data);
                        if ($simpan) {
                            echo "<div class='alert alert-success text-center'>Pendaftaran Sukses! Silahkan <a href='index'>Login</a></div>
                    <div class='card'>
                        <div class='card-body'>
                            <div>
                                <p>Key: <b>$key</b></p>
                                <p>Username: <b>$user</b> ($username)</p>
                                <p>Password: <b>$pass</b> ($password)</p>
                            </div>
                        </div>
                    </div>";
                        } else {
                            echo "<div class='alert alert-danger'>Proses Gagal!</div>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>