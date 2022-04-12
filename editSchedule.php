<?
//connection
$con = mysqli_connect("localhost", "root", "", "insertion");

if (!$con) {
    echo 'not connected to server';
}
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $icNo = $_POST['ic'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $activity = $_POST['activity'];

    echo $id;

    $sql = "UPDATE `activity`
            SET ic_no = '$icNo', name= '$name', date= '$date', desc= '$activity'
            WHERE id= '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
       echo "updated";
    }
}
