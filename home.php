<?php
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>

</head>
<body><br>
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
			   $connect = mysqli_connect($host,$username,$password,$database);
               //or die(mysqli_error()); 
               //mysqli_select_db($connect,$database);
               //or die(mysqli_error()); 

                    $query = ("SELECT * FROM activity");
                    $result = mysqli_query($connect,$query);
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>No.</th>
								<th>IC No</th>
                                <th>Nama</th>
								<th>Tarikh</th>
								<th>Aktiviti</th>
								<th>Tarikh Kemaskini</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['ic_no'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['date'] . "</td>";
						echo "<td>" . $row['desc'] . "</td>";
						echo "<td>" . $row['update_date'] . "</td>";
                        // echo "<td><form class='form-horizontal' method='post' action='tablelist.php'>
                        // <input name='id' type='hidden' value='".$row['id']."';>
                        // <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        // </form></td>";
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
    </div>
</div>
	</body>
	</html>
	
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");

?>
