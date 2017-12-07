<?php include "connectlogic/connectiondatabase.php"; ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ระบบผู้รับบำนาญ</title>


  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="login">
	<h1>Login</h1>
    <form method="post" action="connectlogic/checklogin.php">
    	<input type="text" name="IDcard" placeholder="เลขรหัสบัตรประชาชน" maxlength="13"  required="required" />
        <input type="password" name="password" placeholder="รหัสผ่าน" required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">login</button>
        <a href="register.php">
        <button type="button"   class="btn2 btn2-primary btn2-block btn2-large ">Register</button>
      </a>
    </form>
</div>

    <script  src="js/index.js"></script>

</body>
</html>
