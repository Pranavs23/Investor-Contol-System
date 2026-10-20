<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php include("p2.php");  ?>

<table width="1038" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="148" height="336">&nbsp;</td>
    <td width="890" valign="top"><div align="center">
        <p>INVESTOR REGISTRATION</p>
        <form action="invreg2.php" method="post" enctype="multipart/form-data" name="form1">
          <table width="770" border="1">
            <tr>
              <td width="150">Name</td>
              <td width="174"><input name="t1" type="text" id="t1"></td>
              <td width="164">Place</td>
              <td width="254"><input name="t4" type="text" id="t92"></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><input name="r" type="radio" value="m" checked>                
                M
                <input name="r" type="radio" value="f">
              F</td>
              <td>Pin</td>
              <td><input name="t5" type="text" id="t102"></td>
            </tr>
            <tr>
              <td>Address              </td>
              <td><input name="t2" type="text" id="t2"></td>
              <td>phone</td>
              <td><input name="t6" type="text" id="t112"></td>
            </tr>
            <tr>
              <td>District</td>
              <td><input name="t7" type="text" id="t7"></td>
              <td>State</td>
              <td><input name="t8" type="text" id="t8"></td>
            </tr>
            <tr>
              <td>location</td>
              <td><input name="t3" type="text" id="t3"></td>
              <td>Investment Details</td>
              <td><input name="t11" type="text" id="t103"></td>
            </tr>
            <tr>
              <td>Country</td>
              <td><input name="t9" type="text" id="t95"></td>
              <td>upload file</td>
              <td><input name="f1" type="file" id="f1"></td>
            </tr>
            <tr>
              <td>asset</td>
              <td><input name="t12" type="text" id="t622"></td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>create password </td>
              <td><input name="t14" type="text" id="t14"></td>
              <td>confirm password </td>
              <td><input name="t15" type="text" id="t15"></td>
            </tr>
            <tr>
              <td colspan="4"><div align="center">
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" name="Submit2" value="Reset">
              </div></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
</body>
</html>
