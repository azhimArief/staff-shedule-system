<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "header.php";
include_once("header.php");
include_once("navbar.php");
?>
<html>

<head>
    <style>
        body {
            background-color: white;
        }
    </style>
</head>

<body>

    <br>
    <div class="container my-5">
        <div class="row" align="center">
            <div class="col-lg-6">
                <div class="jumbotron">
                    Masukkan aktiviti di bawah
                    <form class="form-horizontal" method="POST" action="add.sub.php">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Add Schedule</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="subcode">Name :</label>
                                <div class="col-md-5">
                                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="subdescription">Aktiviti :</label>
                                <div class="col-md-5">
                                    <input id="desc" name="desc" type="text" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input for date-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="subdescription">Date :</label>
                                <div class="col-md-5">
                                    <input id="desc" name="desc" type="date" placeholder="" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group" align="right">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <div class="col-md-5">
                                    <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Add Schedule"></input>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>



    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "footer.php";
    include_once("footer.php");
    include_once("navbar.php");
    ?>