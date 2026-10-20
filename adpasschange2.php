<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style6 {font-size: 16px}
-->
</style>
</head>

<body>
<?php //include("p2.php"); ?>
<table width="1265" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="285" height="216">&nbsp;</td>
    <td width="644" valign="top"><div align="center" class="style1">
        <p>change password </p>
        <form name="form1" method="post" action="changepswd1.php">
          <table width="644" border="1">
            <tr>
              <td width="268" class="style6">old password</td>
              <td width="360"><input name="t1" type="password" id="t1" ></td>
            </tr>
            <tr>
              <td><span class="style6">new password </span></td>
              <td><input name="t2" type="password" id="t2"></td>
            </tr>
            <tr>
              <td height="30"><span class="style6">confirm new password</span></td>
              <td><input name="t3" type="password" id="t3"></td>
            </tr>
            <tr>
              <td height="32" colspan="2"><div align="center">
              <?php
			  $s1=$_POST["t1"];
			  $s2=$_POST["t2"];
			  include("connection.php");
			
			  $s=mysql_query("select * from login where  password='$s1'   where userid='admin'");
			  if(mysql_num_rows($s)==0)
			     echo "<b>Invalid old Password";
				else
				{
				$s="update login set password='$s2'  where userid='admin'";
				mysql_query($s);
				echo "Updated";
				} 
			  
			  ?></div></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
    </div></td>
    <td width="336">&nbsp;</td>
  </tr>
  <tr>
    <td height="228">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
