<?php

$con = mysqli_connect('localhost', 'root', '', 'insertion');

if (!$con) {
    echo 'not connected to server';
}

if (isset($_POST['hantar'])) {
    $icNo = $_POST['ic'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $activity = $_POST['activity'];

    $sql = "INSERT INTO `activity`(`ic_no`, `name`, `date`, `desc`) 
            VALUES ('$icNo', '$name', '$date', '$activity')";

}

if ($con->query($sql) === TRUE) {
    echo   '<script type="text/javascript">
                alert("Activity inserted!");
                location="userHome.php";
            </script>';
} 
else {
    echo 'not inserted';
}

