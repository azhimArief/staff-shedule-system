<?php
include_once("header.php");
include_once("userNavbar.php");
if (!isset($_SESSION)) {
    session_start();
}
$idProfile = $_SESSION['ic'];

?>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="main.css">
</head>

<body><br>
    <div align="center">
        <fieldset>
            <legend>Senarai Akvititi Anda</legend>

            <body>
                <?php
                echo "<tr>
            <td>";
                // your database connection
                $host       = "localhost";
                $username   = "root";
                $password   = "";
                $database   = "insertion";

                // select database
                $connect = mysqli_connect($host, $username, $password, $database);
                //or die(mysqli_error()); 
                //mysqli_select_db($connect,$database);
                //or die(mysqli_error()); 

                $query = ("SELECT * FROM activity WHERE ic_no= '$idProfile'");
                $result = mysqli_query($connect, $query);
                echo "<div class='container'><table width='' class='table table-striped' border='0' >
                            <tr class='success'>
                                <th>Nama</th>
								<th>Tarikh</th>
                                <th>Hari</th>
								<th>Aktiviti</th>
                                <th>Edit/Delete</th>
                            </tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    //nk display date susun d/m/y
                    $orgDate = $row['date'];
                    $newDate = date("d-m-Y", strtotime($orgDate));
                    echo "<td>" . $newDate . "</td>";
                    //nak display hari
                    $timestamp = strtotime($row['date']);
                    $day = date('l', $timestamp);
                    echo "<td>" . $day . "</td>";
                    echo "<td>" . $row['desc'] . "</td>";
                    //nk declare session for name
                    $_SESSION['name'] = $row['name'];
                    $nameProfile = $_SESSION['name'];
                    echo "<td>
                        <div class=''>
                            <input name='id' type='hidden' value='" . $row['id'] . "';>
                            <a class='btn btn-default' href='./editScheduleView.php?id= " . $row['id'] . "' name='edit'><span class='glyphicon glyphicon-pencil'></span> Edit</a>
                            <a class='btn btn-danger' href='./deleteSchedule.php?id= " . $row['id'] . "' name='delete'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                        </div>
                        </td>";
                    echo "</tr>";
                }
                echo "</table>";

                echo "</td>           
        </tr>";
                ?>
        </fieldset>
        </form>
    </div>
    </div>
    </div>

    <div align="center">
        <br>
        <a href="addScheduleView.php"><button type="text" class="btn btn-primary">New</button></a>
    </div>
    </div>
</body>

<!-- if needed replacement 
<form class='form-horizontal' method='post' action='tablelist.php'>
                    <div class='btn-   '>
                        <input name='id' type='hidden' value='" . $row['id'] . "';>
                        <button type='button' class='btn btn-default' name='edit' value=''><span class='glyphicon glyphicon-pencil'></span> Edit</button>
                        <button type='button' class='btn btn-danger' name='delete' value=''><span class='glyphicon glyphicon-trash'></span> Delete</button>
                    </div>
            </form>
-->

</html>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");

?>