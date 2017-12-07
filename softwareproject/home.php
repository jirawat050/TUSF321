<?php include "session.php" ?>
<!doctype>
<html>

<head>
  <title>ระบบผู้รับบำนาญ</title>
   	<meta charset="UTF-8">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"  />
   <script type="text/javascript" src="jspdf.min.js"></script>
   <script type="text/javascript" src="html2canvas.js"></script>
    <script type="text/javascript">
   function genPDF(){

    html2canvas(document.getElementById("testdiv"),{
    onrendered: function (canvas) {
    var img=canvas.toDataURL("image/png");

    var doc=new jsPDF();
    doc.addImage(img,'JPEG',20,20);
    doc.save('test.pdf');
    }
    });
    }
 </script>
 <style>
 body{

     background-color: #f2f2f2;
 }

 </style>
 <link rel="stylesheet" type="text/css" href="css/user.css">
 <link rel="stylesheet" type="text/css" href="css/home1.css">




</head>
<body>
  <div class="sidenav">
	<a href="home.php" class="current">ประวัติผู้ใช้</a>
	<a href="filetosent.php">ส่งเอกสาร</a>
	<a href="calculate.php">คำนวณบำนาญ</a>
	<a href="logout.php">logout</a>
</div>



<br><br><br>
<div id="testdiv">
  <h1>ข้อมูลการลงทะเบียน</h1>

  <table style="width:80%">
    <tr>
      <th>รหัสบัตรประชาชน:</th>
      <td><?php echo $login_IDcard;?></td>
    </tr>
    <tr>
      <th rowspan="2">ชื่อ-นามสกุล:</th>
      <td><?php echo $login_name;?></td>
    </tr>
    <tr>
      <td><?php echo $login_surname;?></td>
    </tr>
    <tr>
      <th>วัน/เดือน/ปี เกิด:</th>
      <td><?php echo  date('d-m-Y',strtotime($row['Birthday']));?></td>
    </tr>
      <tr>
      <th>ที่อยู่:</th>
      <td> <?php echo $login_address;?></td>
    </tr>
      <tr>
      <th>การร้องขอ:</th>
      <td>Bill Gates</td>
    </tr>
    <tr>
      <th>อีเมล์:</th>
      <td> <?php echo $row['Email'];?></td>
    </tr>
      <tr>
      <th>อาชีพ:</th>
      <td><?php echo $row['Career'];?></td>
    </tr>
     <tr>
      <th>ธนาคาร:</th>
      <td><?php echo $row['Bank'];?></td>
    </tr>
    <tr>
      <th>เลขที่บัญชี:</th>
      <td><?php echo $login_accountnumber;?></td>
    </tr>
    <tr>
      <th>การร้องขอ:</th>
      <td><?php echo $row['Type'];?></td>
    </tr>
    <tr>
      <th>เงินเดือนสุดท้าย:</th>
      <td> <?php echo $row['Salary'];?></td>
    </tr>
     <tr>
      <th >วันรับราชการ:</th>
      <td><?php echo  date('d-m-Y',strtotime($row['Official']));?></td>
    </tr>
    <tr>
      <th >วันเกษียณ:</th>
      <td> <?php echo  date('d-m-Y',strtotime($row['Retire']));;?></td>
    </tr>
    <tr>
      <th >จำนวนปีที่ทำงาน:</th>
      <td> <?php echo $row['Bureauerucy'];?> ปี</td>
    </tr>
  </table>

</div>
   <h2>เงินที่ควรได้รับ <?php echo $row['Moneyrecieve'];?></h2>
  <a id="s" href="javascript:genPDF()"><button class="button5">Dowload PDF</button></a>
</body>

</html>
