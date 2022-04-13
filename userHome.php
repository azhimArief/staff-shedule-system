<?php
include_once("header.php");
include_once("userNavbar.php");
?>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
</head>

<body><br>
    <div align="center">
        <fieldset>
            <legend>Senarai Akvititi</legend>

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

                $query = ("SELECT * FROM activity");
                $result = mysqli_query($connect, $query);
                echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>No.</th>
								<th>IC No</th>
                                <th>Nama</th>
								<th>Tarikh</th>
								<th>Aktiviti</th>
								<th>Tarikh Kemaskini</th>
                                <th>Edit/Delete</th>
                            </tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['ic_no'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['desc'] . "</td>";
                    echo "<td>" . $row['update_date'] . "</td>";
                    echo "<td>
                        <div class='btn'>
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