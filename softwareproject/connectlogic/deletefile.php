<?php
include 'connectiondatabase.php';
$idselect=$_GET['id'];

$sql = "delete from statetosent where id=$idselect";
$result=mysqli_query($dbcon,$sql);
if($result){
	echo '<script language="javascript">';
	echo  'alert("ข้อมูลถูกลบเรียบแล้ว")';
	echo '</script>';
	$URL="../filetosent.php";
echo "<script>location.href='$URL'</script>";
}
?>
