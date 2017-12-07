<?php

if(isset($_POST['submit'])){
$target = "name/".basename($_FILES['file']['name']);
		//connect to the database
	include 'connectiondatabase.php' ;

		$file = $_FILES['file']['name'];
		$IDcard =$_POST['IDcard'];
		$typebook =$_POST['typebook'];


		$datesent=htmlentities($_POST['datetosent']);
		$date = date('Y-m-d',strtotime($datesent));
		$organization=$_POST['organization'];
		$topic=$_POST['topic'];
    $name=$_POST['name'];
       $id=$_POST['ID'];
  	$check ="SELECT * FROM statetosent WHERE IDcard = '$IDcard' ";
		$checkfile=mysqli_query($dbcon, $check);
		$checkcolum=mysqli_num_rows($checkfile);
		if($checkcolum > 0){

			$sql="UPDATE statetosent SET file='".$file."',datesent='".$date."', sent='".$organization."', type='".$typebook."' ";


			$result = mysqli_query($dbcon,$sql);
			echo '<script language="javascript">';
				echo  'alert("อัพโหลดไฟล์เสร็จสิ้น")';
				echo '</script>';
				$URL="../filetosent.php";
			echo "<script>location.href='$URL'</script>";
			
			if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
				echo '<script language="javascript">';
				echo  'alert("อัพโหลดไฟล์เสร็จสิ้น")';
				echo '</script>';
				$URL="../filetosent.php";
			echo "<script>location.href='$URL'</script>";
			}
		}
		else{
		$sql = "INSERT INTO statetosent (IDcard,file,name,datesent,dateresult,sent,topic,type) VALUES ('$IDcard','$file','$name','$date','กำลังตรวจสอบ','$organization','$topic','$typebook')";
		$result = mysqli_query($dbcon,$sql);
		echo '<script language="javascript">';
				echo  'alert("อัพโหลดไฟล์เสร็จสิ้น")';
				echo '</script>';
				$URL="../filetosent.php";
			echo "<script>location.href='$URL'</script>";
	
		if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
			echo '<script language="javascript">';
			echo  'alert("อัพโหลดไฟล์เสร็จสิ้น")';
			echo '</script>';
			$URL="../filetosent.php";
		echo "<script>location.href='$URL'</script>";
		}
	}

mysqli_close($dbcon);

	}
?>
