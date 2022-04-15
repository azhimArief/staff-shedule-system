<?php
// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= "header.php";
include_once("userNavbar.php");
include_once("header.php");
session_start();
$idProfile = $_SESSION['ic'];
$nameProfile = $_SESSION['name'];
$nameID = $_SESSION['nameID'];
?>

<html>

<head>
    <style>
        body {
            background-image: url();
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="form">
            <form class="form-horizontal" method="post" action="addSchedule.php">
                <fieldset>

                    <legend>Add Activity Here</legend>

                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ic">IC.No</label>
                        <div class="col-md-5">
                            <input id="ic" name="ic" type="number" placeholder="" class="form-control input-md" required="" value="<?php echo $idProfile ?>">
                            <small id="" class="form-text text-muted">Tanpa " - "</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Nama</label>
                        <div class="col-md-5">
                            <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo $nameID ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Tarikh</label>
                        <div class="col-md-5">
                            <input id="date" name="date" type="date" class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="activity">Aktiviti</label>
                        <div class="col-md-5">
                            <textarea name="activity" id="activity" cols="28" rows="3" class="form-control input-md" required></textarea>
                        </div>
                    </div>

                    <div class="form-group" align="right">
                        <label class="col-md-4 control-label" for="hantar"></label>
                        <div class="col-md-5">
                            <input type="submit" name="hantar" class="btn btn-success" value="Hantar">
                        </div>
                    </div>
        </div>
        </fieldset>
        </form>
    </div>
    <!-- <font color="grey">Already have an acount?</font> <a href="index.php">Login here </a> -->
    </div>
    </div>

</body>

</html>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");
?>