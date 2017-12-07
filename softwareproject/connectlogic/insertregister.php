<?php
        require 'connectiondatabase.php';
        if (isset($_POST["submit"])) {
            $login_IDcard = $_POST['IDcard'];
            $login_password = $_POST['password'];
            $login_name= $_POST['name'];
            $login_surname= $_POST['surname'];
            $login_date= htmlentities($_POST['Date']);
            $date = date('Y-m-d',strtotime($login_date));
            $login_accountnumber= $_POST['Accountnumber'];
            $login_address= $_POST['Address'];
            $login_career= $_POST['Career'];
            $login_telephone= $_POST['Telephone'];
            $login_salary= $_POST['Salary'];
            $login_email = $_POST['Email'];
            $login_official=  htmlentities($_POST['Official']);
            $Official= date('Y-m-d',strtotime($login_official));
            $login_retire=  htmlentities($_POST['Retire']);
              $retire= date('Y-m-d',strtotime($login_retire));
            $login_bureauerucy= $_POST['Bureauerucy'];
            $selectbank = $_POST['bank'];
            $radio =$_POST['system'];

            $check ="SELECT * FROM register WHERE IDcard = '$login_IDcard' ";
            $checkdataid = mysqli_query($dbcon,$check);
            $num = mysqli_num_rows($checkdataid);
            if (!filter_var($login_email, FILTER_VALIDATE_EMAIL)){
                echo '<script language="javascript">';
                echo 'alert("Email Error")';
                echo '</script>';
                $URL="../register.php";
              echo "<script>location.href='$URL'</script>";
            } else {

                if($num > 0){
                  echo '<script language="javascript">';
                  echo 'alert("รหัสประชาชนได้มีการลงทะเบียนแล้ว")';
                  echo '</script>';
                  $URL="../register.php";
                echo "<script>location.href='$URL'</script>";
                }
                else{
                $query = "INSERT INTO register (IDcard,Password,Name,Surname,Birthday,Type,Accountnumber,Bank,Address,Career,Telephone,Salary,Email,Official,Retire,Bureauerucy,Moneyrecieve)
                VALUES ('$login_IDcard','$login_password','$login_name','$login_surname','$date','$radio','$login_accountnumber','$selectbank','$login_address','$login_career','$login_telephone','$login_salary','$login_email','$Official','$retire','$login_bureauerucy','waiting')";
                $result = mysqli_query($dbcon,$query);
                echo '<script language="javascript">';
                echo  'alert("รหัสประชาชนได้ลงทะเบียนเสร็จสินแล้ว")';
                echo '</script>';
                $URL="../index.php";
              echo "<script>location.href='$URL'</script>";
              }
            }
            mysqli_close($dbcon);
        }
        ?>
