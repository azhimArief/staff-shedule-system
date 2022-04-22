<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PDSA - Sistem Pergerakan Pegawai</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="style3.css" rel="stylesheet" />
    <style>
        body {
            background-image: url(assets/img/bg.jpg);
            background-color: white;
            background-size: cover;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>

        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="form-group">
                <h2>
                    <font color=lightblue>SISTEM PERGERAKAN</font> </em>
                    <font color=red>PEGAWAI PDSA
                </h2>
                </font>
                <p>
                    <center>
                        <form class="form-horizontal" method="post" action="login.php">
                            <fieldset>

                                <legend>Admin Login</legend>


                                <br>
                                <div class="form-group">
                                    <!-- <label class="col-md-4 control-label" for="username">No. IC</label> -->
                                    <div class="col-md-5">
                                        <input id="username" name="username" type="text" placeholder="Masukkan Username Admin" class="form-control input-md" required="">

                                    </div>
                                </div>


                                <!-- <div class="form-group">
                                    <br>
                                    <label class="col-md-4 control-label" for="password">Password</label>
                                    <div class="col-md-5">
                                        <input id="password" name="password" type="password" placeholder="Masukkan Kata Laluan Anda" class="form-control input-md" required="">

                                    </div>
                                </div> -->


                                <div class="form-group" align="center">
                                    <label class="col-md-4 control-label" for="login"></label>
                                    <div class="col-md-5">
                                        <input type="submit" name="lgn" class="btn btn-success " value="Login">
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                        <!-- <div class="col-sm-3">
                            <input type="nokp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No Kad Pengenalan">
                            <p>
                        </div>
                        <button type="submit" class="btn btn-success">Hantar</button> -->
            </div>


    </header>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>