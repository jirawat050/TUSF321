<?php
include "connectlogic/connectiondatabase.php";
        session_start();


        $session_login_id = $_SESSION['IDcard'];

        $qry_user = "SELECT*FROM register WHERE IDcard='$session_login_id' ";
        $result_user = mysqli_query($dbcon,$qry_user);
        $row=mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $login_IDcard = $row['IDcard'];
        $login_name = $row['Name'];
        $login_surname = $row['Surname'];
        $login_date = $row['Birthday'];
        $login_accountnumber= $row['Accountnumber'];
        $login_address= $row['Address'];
        $login_career= $row['Career'];
        $login_telephone= $row['Telephone'];

    if(!isset($session_login_id))
        {
          header("Location: index.php");
        }
?>
