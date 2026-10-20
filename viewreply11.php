<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="919" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="19" height="44">&nbsp;</td>
    <td width="188">&nbsp;</td>
    <td width="505" valign="top"><div align="center">View Feedback Reply </div></td>
    <td width="207">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="298">&nbsp;</td>
    <td valign="top"><?php 
	include("connection.php");
	session_start();
			$invid=$_SESSION["invid"];
			
	$s=mysql_query("select* from feedback  where invid ='$invid'");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No replies...";
	  else
	  {
	
	echo "<center><table border='1' width='50%'><tr><th>Fid</th><th>Date</th><th>Click</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[2]</td><td><form action='viewreply22.php'  method='post'><input type='hidden' name='t1'  value='$row[0]'><input type='submit' value='View'></form></td></tr>";
	}
	echo"</table>";
	}
	?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
