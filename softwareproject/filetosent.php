<?php include "sessionupdate.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ระบบผู้รับบำนาญ</title>
<meta charset="utf-8">
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/user.css">
<link rel="stylesheet" type="text/css" href="css/tablestyle.css">
<style>
.button5:hover {
   background-color: #555555;
   color: white;
}
.button5 {
   background-color: gray;
   color: black;
   border: 2px solid #555555;
   border: none;
   color: white;
   padding: 16px 32px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   -webkit-transition-duration: 0.4s; /* Safari */
   transition-duration: 0.4s;
   cursor: pointer;
}
body{
  background-color: #f2f2f2;

}
</style>
</head>
<body>

<div class="sidenav">
    <a href="home.php">ประวัติผู้ใช้</a>
  <a href="filetosent.php" id="current">ส่งเอกสาร</a>
  <a href="calculate.php">คำนวณบำนาญ</a>
  <a href="logout.php">logout</a>
</div>

<div class="content">
<br>

<form method="post" action="connectlogic/upload.php"  enctype="multipart/form-data">
  <table border="0" style="width: 100% ;color: black;">
  <input type="hidden" value="<?php echo $row['ID']?>" name='ID'>
<h1 style="text-align:center;">แจ้งการส่ง</h1>
  <tr>
  <td>ประเภทหนังสือ</td><td><select class="form-control" name="typebook">
    <option> - เลือก  - </option>
    <option  value="บำเหน็จ">บำเหน็จ</option>
    <option  value="บำนาญ">บำนาญ</option>


  </select></td><td></td><td></td>
  </tr>
  <tr>
  <td>ลงวันที่</td><td><input type="date" name="datetosent" class="form-control"></td><td></td><td></td>
  </tr>
  <tr>
  <td>เลขที่หนังสือ</td><td><input id="x2" type="number" name="IDcard" value="<?php echo $row['IDcard']?>"></td><td></td><td></td>
  </tr>
  <tr>
  <td>จาก</td>
  <td><input id="x2" type="text" name="name" value="<?php echo $row['Name']?> <?php echo $row['Surname']?>"></td><td align="center">ถึง</td>
  	<td><select class="form-control" name="organization">

  		<option  value="อบต">อบต</option>
  		<option value="อบจ">อบจ</option>
  		<option value="เทศบาล">เทศบาล</option>
  		<option value="กฌ.">กฌ.</option>
  		<option value="การเงิน">การเงิน</option>
  		<option value="รายได้">รายได้</option>
  		<option value="ตรวจสอบ้" >ตรวจสอบ</option>
  		<option value="บัญชี้">บัญชี</option>

  	</select> </td>
  </tr>
  <tr>
  <td>เรื่อง</td><td><input type="text" name="topic" class="form-control"></td><td></td><td></td>
  </tr>

  <tr>
  <td>เอกสารต้นฉบับ</td><td><input id="x2" type="file" name="file"></td><td></td><td></td>
  </tr>
  <tr>
  <td>รายละเอียด</td><td><input type="text" class="form-control"></td><td></td><td></td>
  </tr>


  </table>

<input class="button5" type="submit" name="submit" value="Send">
<br><br>
</form>
<div id="showdata">
  <table border='1'>
  <tr>
  <th>IDฺBook</th>
  <th>File to up</th>
  <th>จาก</th>
  <th>ประเภทการร้องขอ</th>
  <th>วันที่ส่ง</th>
  <th>วันที่ได้รับ</th>
  <th>ถึง</th>
  <th>หัวข้อ</th>
  <th>ยกเลิกเอกสาร</th>


  </tr>

  <tr>
  <td><?php echo $row1['IDcard']?></td>

  <td><?php  echo "<a href='connectlogic/name/".$row1['file']."' >".$row1['file']."</a>"; ;?>
  <td><?php echo $row1['name']?></td>
  <td><?php echo $row1['type']?></td>
  <td><?php echo $row1['datesent']?></td>
  <td><?php echo $row1['dateresult']?></td>
  <td><?php echo $row1['sent']?></td>
  <td><?php echo $row1['topic']?></td>
    <td><a href="connectlogic/deletefile.php?id=<?php echo $row1['ID']?>">Delete</a></td>

  </tr>


  </table>
</div>
</form>
</div>


<script>
  document.getElementById("current").style.background = "red";
</script>
</body>
</html>
