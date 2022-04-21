<?php
// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= "header.php";
include_once("userNavbar.php");
include_once("header.php");
//to check if session already started
if (!isset($_SESSION)) {
    session_start();
}
$idProfile = $_SESSION['ic'];
//$nameProfile = $_SESSION['name'];
$nameID = $_SESSION['nameID'];
?>

<html>

<head>
    <link rel="stylesheet" href="main.css">
    <!-- <style>
        body {
            background-image: url();
            background-color: white;
        }
    </style> -->
</head>

<body>
    <div class="content">
        <div class="form">
            <form class="form-horizontal" method="post" action="addSchedule.php">
                <fieldset>

                    <legend>Add Schedule</legend>

                    <br>
                    <input id="ic" name="ic" type="hidden" placeholder="" class="form-control input-md" required="" value="<?php echo $idProfile ?>">
                    <input id="name" name="name" type="hidden" placeholder="" class="form-control input-md" required="" value="<?php echo $nameID ?>">

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Tarikh</label>
                        <div class="col-md-5">
                            <!-- <input id="date" name="date" type="date" class="form-control input-md" required=""> -->
                            <h5>Isnin</h5>
                            <h5><?php echo date('d/m/Y', strtotime("monday this week")) ?></h5>
                            <input type="hidden" class="form-control input-md" name="date1" value="<?php echo date('Y/m/d', strtotime("monday this week")) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="activity">Aktiviti</label>
                        <div class="col-md-5">
                            <textarea name="activity1" id="activity1" cols="28" rows="3" class="form-control input-md" required></textarea>
                        </div>
                    </div>

                    <hr style="height:2px;border-width:0;border-top: 1px dashed red;">

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Tarikh</label>
                        <div class="col-md-5">
                            <!-- <input id="date" name="date" type="date" class="form-control input-md" required=""> -->
                            <h5>Selasa</h5>
                            <h5><?php echo date('d/m/Y', strtotime("tuesday this week")) ?></h5>
                            <input type="hidden" class="form-control input-md" name="date2" value="<?php echo date('Y/m/d', strtotime("tuesday this week")) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="activity">Aktiviti</label>
                        <div class="col-md-5">
                            <textarea name="activity2" id="activity2" cols="28" rows="3" class="form-control input-md" required></textarea>
                        </div>
                    </div>

                    <hr style="height:2px;border-width:0;border-top: 1px dashed red;">

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Tarikh</label>
                        <div class="col-md-5">
                            <!-- <input id="date" name="date" type="date" class="form-control input-md" required=""> -->
                            <h5>Rabu</h5>
                            <h5><?php echo date('d/m/Y', strtotime("wednesday this week")) ?></h5>
                            <input type="hidden" class="form-control input-md" name="date3" value="<?php echo date('Y/m/d', strtotime("wednesday this week")) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="activity">Aktiviti</label>
                        <div class="col-md-5">
                            <textarea name="activity3" id="activity3" cols="28" rows="3" class="form-control input-md" required></textarea>
                        </div>
                    </div>

                    <hr style="height:2px;border-width:0;border-top: 1px dashed red;">

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Tarikh</label>
                        <div class="col-md-5">
                            <!-- <input id="date" name="date" type="date" class="form-control input-md" required=""> -->
                            <h5>Khamis</h5>
                            <h5><?php echo date('d/m/Y', strtotime("thursday this week")) ?></h5>
                            <input type="hidden" class="form-control input-md" name="date4" value="<?php echo date('Y/m/d', strtotime("thursday this week")) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="activity">Aktiviti</label>
                        <div class="col-md-5">
                            <textarea name="activity4" id="activity4" cols="28" rows="3" class="form-control input-md" required></textarea>
                        </div>
                    </div>

                    <hr style="height:2px;border-width:0;border-top: 1px dashed red;">

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Tarikh</label>
                        <div class="col-md-5">
                            <!-- <input id="date" name="date" type="date" class="form-control input-md" required=""> -->
                            <h5>Jumaat</h5>
                            <h5><?php echo date('d/m/Y', strtotime("friday this week")) ?></h5>
                            <input type="hidden" class="form-control input-md" name="date5" value="<?php echo date('Y/m/d', strtotime("friday this week")) ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="activity">Aktiviti</label>
                        <div class="col-md-5">
                            <textarea name="activity5" id="activity5" cols="28" rows="3" class="form-control input-md" required></textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group" align="right">
                        <label class="col-md-4 control-label" for="hantar"></label>
                        <div class="col-md-5">
                            <input type="submit" name="hantar" class="btn btn-success" value="Hantar">
                        </div>
                    </div>
                    <hr>
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