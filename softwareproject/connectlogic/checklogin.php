<?php

session_start();
  include 'connectiondatabase.php';

    if(isset($_POST["submit"]))
  	{
  		if(empty($_POST["IDcard"]) || empty($_POST["password"]))
  		{
  			$error = "Both fields are required.";
  		}else
  		{
  			// Define $username and $password
  			$username=$_POST['IDcard'];
  			$password=$_POST['password'];


  			//Check username and password from database
  			$sql="SELECT id FROM register WHERE IDcard='$username' and Password='$password'";
  			$result=mysqli_query($dbcon,$sql);
  			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

  			//If username and password exist in our database then create a session.
  			//Otherwise echo error.

  			if(mysqli_num_rows($result) == 1)
  		{
        $_SESSION['IDcard']= $username;

        echo '<script language="javascript">';
        echo  'alert("ยินดีต้อนรับเข้าสู่ระบบ")';
         echo '</script>';
        $URL="../home.php";
      echo "<script>location.href='$URL'</script>";
    // Redirecting To Other Page
  			}else
  			{
            echo '<script language="javascript">';
            echo  'alert("รหัสประชาชนหรือรหัสผ่านไม่ถูกต้อง")';

            echo '</script>';
              $URL="../index.php";
            echo "<script>location.href='$URL'</script>";
  			}
  		}
  	}

?>
