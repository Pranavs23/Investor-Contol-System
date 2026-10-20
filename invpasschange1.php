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
<script language="javascript">
function abc()
{
if(document.form1.t1.value=="" || document.form1.t2.value=="" || document.form1.t3.value=="")
{
alert("Please Enter the Password");
return(false);


}
if(document.form1.t2.value  != document.form1.t3.value)
{
alert("Password and Retype Password are not Same");
return(false);


}





}


</script>
<body>
<?php //include("p2.php"); ?>
<table width="1265" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="276" height="216">&nbsp;</td>
    <td width="644" valign="top"><div align="center" class="style1">
        <p>Change Password </p>
        <form name="form1" onSubmit="return abc()" method="post" action="invpasschange2.php">
          <table width="439" border="0">
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
                <input type="submit" name="Submit" value="Submit">
              </div></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
    </div></td>
    <td width="345">&nbsp;</td>
  </tr>
  <tr>
    <td height="228">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
