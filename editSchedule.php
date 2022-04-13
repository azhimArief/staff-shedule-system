<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insertion";

//kene buat separate file
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//nk dapatkan id
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    //tuk update
    $icNo = $_POST['ic'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $activity = $_POST['activity'];

    $sql = "UPDATE `activity` SET `ic_no`='$icNo', `name`='$name', `date`='$date', `desc`= '$activity' WHERE `id`='$id'";
} else {
    echo 'no id';
}


if (mysqli_query($conn, $sql)) {
   echo '<script type="text/javascript">
            alert("Schedule updated");
            location="userHome.php";
        </script>';
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
