<?php
session_start();

  $ic = $_POST['ic'];
 
  if ($ic)
  {
	 $connect = mysqli_connect("localhost", "root", "","insertion")or die("couldn't connect to the database!");
	
	 $sql = "SELECT * FROM user WHERE ic='$ic'";
	 $query = mysqli_query($connect,$sql);
	 
	 $numrows = mysqli_num_rows($query);
	 
	 if($numrows!==0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $dbic = $row['ic'];
			 $dbname = $row['name'];
		 }
		 if ($ic==$dbic)
		 {
			  echo '<script type="text/javascript">
                         location="userHome.php";
                           </script>';
			 $_SESSION['ic'] = $dbic;
			 $_SESSION['nameID'] = $dbname;

		 }
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("That user does not exist!");
                         location="index.php";
                           </script>');		 	  
  }
