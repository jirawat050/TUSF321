<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8" />
<title>ระบบผู้รับบำนาญ</title>

<style>
input[type=radio]{
  width: 5%;
  margin-bottom: 10px;
  margin-left: 10px;
  color: white;
}
input[type="checkbox"]{
  width: 10%;
}
mark{
  background: none;
  color: white;
}
</style>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/recap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script language="javascript">
  function checkID(id)
  {
  if(id.length != 13) return false;
  for(i=0, sum=0; i < 12; i++)
  sum += parseFloat(id.charAt(i))*(13-i); if((11-sum%11)%10!=parseFloat(id.charAt(12)))
  return false; return true;}

  function checkForm()
  { if(!checkID(document.form1.IDcard.value))
   window.alert('รหัสประชาชนไม่ถูกต้อง');
  else header("Location: connectlogic/insertregister.php");}
  </script>


</head>

<body>
  <div class="register">

  <h1>Register</h1>

      <form name="form1" onsubmit="checkForm();return false;" method="post"  action="connectlogic/insertregister.php" id="formInput">
        <p>เลขบัตรประชาชน</p><input type="text" name="IDcard" />
        <p>รหัสผ่าน</p><input type="password" name="password"  required="required" />
        <p>ชื่อ</p><input type="text" name="name"  required="required" />
        <p>นามสกุล</p><input type="text" name="surname"  required="required" />
        <p>วันเดือนปีเกิด</p><input type="date" name ="Date" id="myDate" value="1997-01-01">
        <p>ประเภทการร้องขอ</p>
        <input type="radio" name="system" value="บำเหน็จ">บำเหน็จ</input>
        <input type="radio" name="system" value="บำนาญ">บำนาญ</input>
        <p>เลขที่บัญชีธนาคาร</p><input type="number" name="Accountnumber" min="10"  required="required" />
        <p>ธนาคาร</p>
        <select class="w3-select w3-border" name="bank">
        <option value="" class="label">โปรดเลือกธนาคาร</option>
        <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
        <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
        <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
        <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
        <option value="ธนาคารทหารไทย">ธนาคารทหารไทย</option>
        </select>
        <p>ที่อยู่</p><input type="text" name="Address" min="10" required="required" />
        <p>อาชีพ</p><input type="text" name="Career" min="5" required="required" />
        <p>เบอร์โทร</p><input type="text" name="Telephone"  required="required" />
        <p>เงินเดือนสุดท้าย</p><input type="number" name="Salary"  required="required" />
        <p>E-mail</p><input type="text" name="Email"  required="required" />
        <p>วันรับราชการ</p><input type="date" name="Official"  required="required" value="1997-01-01"p>
        <p>วันเกษียน</p><input type="date" name="Retire"  required="required" value="1997-01-01" />
        <p>จำนวนปีรับราชการ</p><input type="number" name="Bureauerucy"  required="required" />
        <br><br>
        <span class="msg-error error"></span>
        

        <div id="recaptcha" class="g-recaptcha" data-sitekey="6LeFFTwUAAAAACybKhUuf8uLH_aYFclAFLDNUhIE"></div>
<br>
        <button type="submit"  id="btn-validate" name="submit" class="btn btn-primary btn-block btn-large" >ยืนยัน</button>
        <a href="index.php" id="link"><button type="button"   class="btn2 btn2-primary btn2-block btn2-large ">ยกเลิก</button></a>



</div>


    <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

      <script  src="js/index.js"></script>

</body>
</html>
