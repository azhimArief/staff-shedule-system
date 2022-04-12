<?php
// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= "header.php";
include_once("navbar.php");
include_once("header.php");

//connection
$con = mysqli_connect('localhost', 'root', '', 'insertion');

//untuk panggil id yang nak edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
} else {
    echo 'no id';
}

//nak panggil data dalam database
$sql = "SELECT * FROM `activity` WHERE id = $id";
$result = $con->query($sql);
$data = $result->fetch_assoc();
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
            <form class="form-horizontal" action="editSchedule.php" method="post">
                <fieldset>

                    <legend>Edit Schedule Here</legend>

                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ic">IC.No</label>
                        <div class="col-md-5">
                            <input type="hidden" name="id" value="<? $data['id'] ?>">
                            <input id="ic" name="ic" type="number" placeholder="" class="form-control input-md" value="<?= $data['ic_no'] ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Nama</label>
                        <div class="col-md-5">
                            <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="<?= $data['name'] ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="date">Tarikh</label>
                        <div class="col-md-5">
                            <input id="date" name="date" type="date" class="form-control input-md"  value="<?= $data['date'] ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="activity">Aktiviti</label>
                        <div class="col-md-5">
                            <textarea name="activity" id="activity" cols="28" rows="3" class="form-control input-md" value="<?= $data['desc'] ?>" required><?= $data['desc'] ?></textarea>
                        </div>
                    </div>

                    <div class="form-group" align="right">
                        <label class="col-md-4 control-label" for="hantar"></label>
                        <div class="col-md-5">
                            <input type="submit" name="update" id="update" class="btn btn-success" value="Kemaskini">
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