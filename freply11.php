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
-->
</style>
</head>

<body>

<table width="948" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="28" height="36">&nbsp;</td>
    <td width="183">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center" class="style1">Feedback Reply to Investor </div></td>
    <td width="184">&nbsp;</td>
  </tr>
  <tr>
    <td height="340">&nbsp;</td>
    <td colspan="2" valign="top"><?php 
	include("connection.php");
	$s=mysql_query("select*from feedback  where invid is not null and reply is null");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No replies...";
	  else
	  {
	
	echo "<center><table border='1' width='50%'><tr><th>Fid</th><th>Investor id</th><th>Fdate</th><th>Click</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[6]</td><td>$row[2]</td><td><form action='freply22.php'  method='post'><input type='hidden' name='t1'  value='$row[0]'><input type='submit' value='View'></form></td></tr>";
	}
	echo"</table>";
	}
	?></td>
    <td width="449">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td></td>
    <td width="104"></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
