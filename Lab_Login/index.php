<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>

<br><br><br><br><br><br><br><br><br><br><br><br>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#eaf8f8">
  <tr>
    <td align="center" bgcolor="#B7FF93"><font color="#717174">會員系統 - 首頁</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline">
      <?php if(!isset($_COOKIE["userName"])) {?>
        <a href="login.php">登入</a>
      <?php } else{?>
        <a href="login.php?logout=1">登出</a>
      <?php }?>
      | <a href="secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#B7FF93"><?php echo "Hello!".$_COOKIE["userName"]?></td>
  </tr>
</table>


</body>
</html>