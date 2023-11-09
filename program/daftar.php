<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pendaftaran</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class='card'>
                    <div class='card-body bg-secondary'>
                        <!-- REGISTER -->
                        <form action="register.php" class="" method="post">
                            <h3 class="text-center">Daftar User</h3>
                            <div class="form-group mt-3">
                                <input class="form-control" required="required" name="username" id="username" rows="3" placeholder="Masukkan Username"></input>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" required="required" name="password" id="password" rows="3" placeholder="Masukkan Password"></input>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Register" class="btn btn-success">
                            </div>
                            
                            <a href="index.php">Kembali</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>