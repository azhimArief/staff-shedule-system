<?php
include_once("header.php");
include_once("navbar.php");
?>


<html>

<head>
</head>

<body>
    <br>
    <div align="center">
        <fieldset>
            <legend>Senarai Akvititi Staf</legend>

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
                $query2 = ("SELECT * FROM user");
                $result2 = mysqli_query($connect, $query2);
                //for one week 
                $day = date('w');
                echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Nama</th>";
                echo            "<th>Isnin <br>" . $monday = date('d-m-Y', strtotime('-' . (1 - $day) . ' days')) . "</th>";
                echo            "<th>Selasa <br>" . $tuesday = date('d-m-Y', strtotime('+' . (+$day) . ' days')) . "</th>";
                echo            "<th>Rabu <br>" . $wednesday = date('d-m-Y', strtotime('+' . (1 + $day) . ' days')) . "</th>";
                echo            "<th>Khamis <br>" . $thursday = date('d-m-Y', strtotime('+' . (2 + $day) . ' days')) . "</th>";
                echo            "<th>Jumaat <br>" . $friday = date('d-m-Y', strtotime('+' . (5 - $day) . ' days')) . "</th>";
                echo       "</tr>";
                while ($row = mysqli_fetch_array($result2)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    while ($row2 = mysqli_fetch_array($result)) {
                        if ($row2['name'] == $row['name']) {
                            if ($row2['date'] == date('Y-m-d', strtotime('-' . (1 - $day) . ' days'))) {
                                echo "<td>" . $row2['desc'] . "</td>";
                            }
                            if ($row2['date'] == date('Y-m-d', strtotime('+' . (+$day) . ' days'))) {
                                echo "<td>" . $row2['desc'] . "</td>";
                            }
                            if ($row2['date'] == date('Y-m-d', strtotime('+' . (1 + $day) . ' days'))) {
                                echo "<td>" . $row2['desc'] . "</td>";
                            }
                            if ($row2['date'] == date('Y-m-d', strtotime('+' . (2 + $day) . ' days'))) {
                                echo "<td>" . $row2['desc'] . "</td>";
                            }
                            if ($row2['date'] == date('Y-m-d', strtotime('+' . (5 - $day) . ' days'))) {
                                echo "<td>" . $row2['desc'] . "</td>";
                            }
                        } else {
                            echo "exit";
                            echo "</tr>";
                        }
                    }
                }
                echo "</table>";
                echo "</td>           
        </tr>";

                ?>
        </fieldset>
        </form>
    </div>

    <div align="center">
        <!-- <br> footer maybe -->
    </div>
    </div>
</body>

</html>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");

// Reference date for isnin till jumaat
// $day = date('w');
// echo "<br>";
// echo $week_start = date('d-m-Y', strtotime('-' . (1 - $day) . ' days'));
// echo "<br>";
// echo $week_end = date('d-m-Y', strtotime('+' . (5 - $day) . ' days'));
// Reference display current date
// $date = date('Y-m-d');
// echo date('Y-m-d', strtotime($date . ' + 6 days'));
?>