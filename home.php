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

                //untuk current minggu date for one week 
                $monday = date('Y/m/d', strtotime("monday this week"));
                $tuesday = date('Y/m/d', strtotime("tuesday this week"));
                $wednesday = date('Y/m/d', strtotime("wednesday this week"));
                $thursday = date('Y/m/d', strtotime("thursday this week"));
                $friday = date('Y/m/d', strtotime("friday this week"));

                $query = ("SELECT * FROM `activity` ORDER BY `date` AND `name` ASC");
                $result = mysqli_query($connect, $query);
                $query2 = ("SELECT * FROM `user` ORDER BY `name` DESC;");
                $result2 = mysqli_query($connect, $query2);
                //for one week 
                $day = date('w');
                echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>  
                                <th>Nama</th>";
                echo            "<th>Isnin <br>" . $monday . "</th>";
                echo            "<th>Selasa <br>" . $tuesday . "</th>";
                echo            "<th>Rabu <br>" . $wednesday . "</th>";
                echo            "<th>Khamis <br>" . $thursday . "</th>";
                echo            "<th>Jumaat <br>" . $friday  . "</th>";
                echo       "</tr>";

                //Cara Lain
                // $name = 'wan';
                // $nameCount = 0;
                // while ($row = mysqli_fetch_array($result)) {
                //     if ($row['name'] != $name) {
                //         $name = $row['name'];
                //         $nameCount = 0;
                //         echo "</tr>";
                //     }
                //     if ($nameCount == 0 && $row['name'] == $name) {
                //         echo "<tr>";
                //         echo "<td colspan='6' align='center'><h4>" . $row['name'] . "</h4></td>";
                //         echo "</tr>";
                //         echo "<tr>";
                //         $nameCount++;
                //     }
                //     if ($row['name'] == $name) {
                //         echo "<td>" . $row['desc'] . "</td>";
                //     }
                // }

                $name = 'wan';
                $nameCount = 0;
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['name'] != $name) {
                        $name = $row['name'];
                        $nameCount = 0;
                        echo "</tr>";
                    }
                    if ($nameCount == 0 && $row['name'] == $name) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        //echo "</tr>";
                        //echo "<tr>";
                        $nameCount++;
                    }
                    if ($row['name'] == $name) {
                        if (date('Y/m/d', strtotime($row['date'])) == date('Y/m/d', strtotime("monday this week"))) {
                            echo "<td>" . $row['desc'] . "</td>";
                        }
                        else if (date('Y/m/d', strtotime($row['date'])) == date('Y/m/d', strtotime("tuesday this week"))) {
                            echo "<td>" . $row['desc'] . "</td>";
                        }
                        else if (date('Y/m/d', strtotime($row['date'])) == date('Y/m/d', strtotime("wednesday this week"))) {
                            echo "<td>" . $row['desc'] . "</td>";
                        }
                        else if (date('Y/m/d', strtotime($row['date'])) == date('Y/m/d', strtotime("thursday this week"))) {
                            echo "<td>" . $row['desc'] . "</td>";
                        }
                        else if (date('Y/m/d', strtotime($row['date'])) == date('Y/m/d', strtotime("friday this week"))) {
                            echo "<td>" . $row['desc'] . "</td>";
                        } 
                    }
                }



                echo "</table>";

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