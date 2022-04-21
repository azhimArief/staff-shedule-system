<?php
// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= "header.php";
include_once("userNavbar.php");
include_once("header.php");

//connection
$con = mysqli_connect('localhost', 'root', '', 'insertion');

//untuk panggil id yang nak edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo 'no id';
}

//nak panggil data dalam database
$sql = "SELECT * FROM `activity` WHERE id = $id";
$result = $con->query($sql);
$data = $result->fetch_assoc();
$icNo = $data['ic_no'];
$name = $data['name'];
$date = $data['date'];
$activity = $data['desc'];

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
            <form class="form-horizontal" method="post" action="EditSchedule.php">
                <fieldset>

                    <legend>Edit Schedule Here</legend>

                    <br>

                            <input type="hidden" name="id" id="id" value="<?php echo $data['id'] ?>">
                            <input id="ic" name="ic" type="hidden" placeholder="" class="form-control input-md" value="<?php echo $data['ic_no'] ?>">
                            <input id="name" name="name" type="hidden" placeholder="" class="form-control input-md" value="<?php echo $data['name'] ?>">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Tarikh</label>
                        <div class="col-md-5">
                            <h5><?php echo $data['date'];  ?></h5>
                            <input id="date" name="date" type="hidden" class="form-control input-md" value="<?php echo $data['date'] ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="activity">Aktiviti</label>
                        <div class="col-md-5">
                            <input type="text" name="activity" id="activity" class="form-control-input" value="<?php echo $data['desc'] ?>">
                        </div>
                    </div>

                    <div class="form-group" align="right">
                        <label class="col-md-4 control-label" for="hantar"></label>
                        <div class="col-md-5">
                            <input type="submit" name="update" id="update" class="btn btn-success" value="Kemaskini">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
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