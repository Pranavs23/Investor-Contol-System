<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1056" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="239" height="33">&nbsp;</td>
    <td colspan="2" valign="top">PRE PROFIT ANALYSIS
      <div align="center"></div></td>
    <td width="305">&nbsp;</td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td width="360">&nbsp;</td>
    <td width="152">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="298" colspan="2" valign="top"><?php
			include("connection.php");
			session_start();
			$invid=$_SESSION["invid"];
			 $s=mysql_query("select * from cmprequest a,allotfund b where a.reqno=b.reqno and a.invid='$invid' and a.reqno in (select reqno from issuefund) and a.reqno  in (select reqno from invcompletion)");
			if(mysql_num_rows($s)==0)
			echo"<b> noT recieved";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Reqno</th><th>Cmpid</th><th>Appamount</th><th>AppDate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[9]</td><td>$row[10]</td><td><form action='preprofitanalysis2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="720">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
