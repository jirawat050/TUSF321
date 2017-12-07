<?php
include "connectlogic/connectiondatabase.php";
 include "session.php";
      


        $sessionIDcard = $_SESSION['IDcard'];

        $sql = "SELECT*FROM statetosent WHERE IDcard='$sessionIDcard' ";
        $result= mysqli_query($dbcon,$sql);
        $row1=mysqli_fetch_array($result,MYSQLI_ASSOC);


    if(!isset($sessionIDcard))
        {
          header("Location: home.php");
        }
?>
