<?php include "session.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ระบบผู้รับบำนาญ</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/user.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<script>
function submitOver(){
  document.getElementById("myBtn").style.background = "red";
}
function submitOut(){
  document.getElementById("myBtn").style.background = "#999999";
}
function Calculate() {
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    document.getElementById("demo").innerHTML = (a * b)/50;
}
</script>
<style>
body{

    background-color: #f2f2f2;
}
</style>
</head>
<body>

<div class="sidenav">
    <a href="home.php">ประวัติผู้ใช้</a>
  <a href="filetosent.php">ส่งเอกสาร</a>
  <a href="calculate.php" id="current">คำนวณบำนาญ</a>
  <a href="logout.php">logout</a>
</div>

<div class="content">
  <h2 id="head" style="text-align:center;">การคำนวณบำนาญ</h2>
<br>
    <label for="counttimework">จำนวนวนปีรับราชการ</label>
  <input type="number" id="a" name="counttime" placeholder="เวลาราชการปกติ 27 ปี 5 เดือน 15 วัน ให้ปัดขึ้นเป็น28" >
    <br>
    <label for="salary">เงินเดือนสุดท้ายที่ได้รับ</label>
    <input type="number" id="b" name="salary" placeholder="">
    <br>
    <button class="button" id="myBtn" name="button" onclick="Calculate()" onmouseover="submitOver()" onmouseout="submitOut()">submit</button>
    <h1 id="demo"></h1>
</div>
<script>
  document.getElementById("current").style.background = "red";
</script>
</body>
</html>
