<?php
session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
 
  if ($username&&$password)
  {
	 $connect = mysqli_connect("localhost", "root", "","insertion")or die("couldn't connect to the database!");
	
	 $sql = "SELECT * FROM admin WHERE username='$username'";
	 $query = mysqli_query($connect,$sql);
	 
	 $numrows = mysqli_num_rows($query);
	 
	 if($numrows!==0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $dbusername = $row['username'];
			 $dbpassword = $row['password'];
		 }
		 if ($username==$dbusername&&($password)==$dbpassword)
		 {
			  echo '<script type="text/javascript">
                      alert("Welcome Admin!");
                         location="home.php";
                           </script>';
			 $_SESSION['username'] = $username;
		 }
		 else
			 echo '<script type="text/javascript">
                      alert("Incorrect Password!");
                         location="adminLogin.php";
                           </script>';
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("The user does not exist!");
                         location="adminLogin.php";
                           </script>');		 
	  
  }
  else 
	  die('<script type="text/javascript">
                      alert("Please enter an IC Number and password!");
                         location="tb.php";
                           </script>');