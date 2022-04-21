<?php

$con = mysqli_connect('localhost', 'root', '', 'insertion');

if (!$con) {
    echo 'not connected to server';
}

//Isnin Insert 
if (isset($_POST['hantar'])) {
    $icNo = $_POST['ic'];
    $name = $_POST['name'];

    $date1 = $_POST['date1'];
    $activity1 = $_POST['activity1'];

    $sql1 = "INSERT INTO `activity`(`ic_no`, `name`, `date`, `desc`) 
            VALUES ('$icNo', '$name', '$date1', '$activity1')";
}

//Selasa
if (isset($_POST['hantar'])) {
    $icNo = $_POST['ic'];
    $name = $_POST['name'];
    //Selasa insert
    $date2 = $_POST['date2'];
    $activity2 = $_POST['activity2'];

    $sql2 = "INSERT INTO `activity`(`ic_no`, `name`, `date`, `desc`) 
        VALUES ('$icNo', '$name', '$date2', '$activity2')";
}

//Rabu
if (isset($_POST['hantar'])) {
    $icNo = $_POST['ic'];
    $name = $_POST['name'];
    //Rabu insert
    $date3 = $_POST['date3'];
    $activity3 = $_POST['activity3'];

    $sql3 = "INSERT INTO `activity`(`ic_no`, `name`, `date`, `desc`) 
        VALUES ('$icNo', '$name', '$date3', '$activity3')";
}

//Khamis
if (isset($_POST['hantar'])) {
    $icNo = $_POST['ic'];
    $name = $_POST['name'];
    //Khamis insert
    $date4 = $_POST['date4'];
    $activity4 = $_POST['activity4'];

    $sql4 = "INSERT INTO `activity`(`ic_no`, `name`, `date`, `desc`) 
        VALUES ('$icNo', '$name', '$date4', '$activity4')";
}

//Jumaat
if (isset($_POST['hantar'])) {
    $icNo = $_POST['ic'];
    $name = $_POST['name'];
    //Jumaat insert
    $date5 = $_POST['date5'];
    $activity5 = $_POST['activity5'];

    $sql5 = "INSERT INTO `activity`(`ic_no`, `name`, `date`, `desc`) 
        VALUES ('$icNo', '$name', '$date5', '$activity5')";
}

if ($con->query($sql1) === TRUE && $con->query($sql2) === TRUE && $con->query($sql3) === TRUE && $con->query($sql4) === TRUE && $con->query($sql5) === TRUE) {
    echo   '<script type="text/javascript">
                alert("Activity inserted!");
                location="userHome.php";
            </script>';
} else {
    echo 'not inserted';
}
