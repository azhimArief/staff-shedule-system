<?php

//kene tukar panggil ke connection file for safety. 
$link = mysqli_connect("localhost", "root", "", "insertion");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Delete Query
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM activity where id =  $id";
}

$result = mysqli_query($link, $sql);
if ($result) {
    echo '<script type="text/javascript">
            alert("Activity deleted");
            location="userHome.php";
        </script>';
}

