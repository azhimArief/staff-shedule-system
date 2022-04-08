<?php

$link = mysqli_connect("localhost", "root", "", "insertion");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM activity where id =  $id";
}


$result = mysqli_query($link, $sql);


// if(isset($_GET['delete'])){
   
//    if ($result) {
//         echo '<script type="text/javascript">
//         alert("deleted Schedule Added Successfully");
//                 location="tb.php";
//                 </script>';
//    	    // echo 'deleted!';
//    } else {
//    	echo "not deleted!";
//    }
// } echo ".";
