<?php
session_start();

$username = $_POST['username'];

if ($username) {
	$connect = mysqli_connect("localhost", "root", "", "insertion") or die("couldn't connect to the database!");

	$sql = "SELECT * FROM admin WHERE username='$username'";
	$query = mysqli_query($connect, $sql);

	$numrows = mysqli_num_rows($query);

	if ($numrows !== 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			$dbusername = $row['username'];
		}
		if ($username == $dbusername) {
			echo '<script type="text/javascript">
                      alert("Welcome Admin!");
                         location="home.php";
                           </script>';
			$_SESSION['username'] = $username;
		}
	} else
		die('<script type="text/javascript">
                      alert("The user does not exist!");
                         location="adminLogin.php";
                           </script>');
} else
	die('<script type="text/javascript">
                      alert("Please enter your IC Number!");
                         location="tb.php";
                           </script>');
