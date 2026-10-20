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
    <td colspan="4" valign="top"><div align="center">View Feedback Reply </div></td>
    <td width="130">&nbsp;</td>
    <td width="77">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="23">&nbsp;</td>
    <td width="315">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="126">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="298">&nbsp;</td>
    <td valign="top"><?php
	$s1=$_POST["t1"]; 
	include("connection.php");
	session_start();
			$cmpid=$_SESSION["cmpid"];
			
	$s=mysql_query("select* from feedback  where cmpid ='$cmpid'");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No replies...";
	  else
	  {
	
	echo "<center><table border='1' width='50%'><tr><th>Fid</th><th>Date</th><th>Click</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[2]</td><td><form action='viewreply2.php'  method='post'><input type='hidden' name='t1'  value='$row[0]'><input type='submit' value='View'></form></td></tr>";
	}
	echo"</table>";
	}
	?></td>
    <td>&nbsp;</td>
    <td valign="top"><table width="238" border="3">
      <tr>
        <td colspan="2"><div align="center">FEEDBACK <?php       
		
		$s=mysql_query("select* from feedback  where fid=$s1");
		
		if($row=mysql_fetch_array($s))
		{
		$feedback=$row[1];
		$fdate=$row[2];
		$reply=$row[3];
		$rdate=$row[4];
		}
		?></div></td>
      </tr>
      <tr>
        <td colspan="2"><form name="form1" method="post" action="">
          <textarea name="textarea" cols="35"><?php echo $feedback; ?></textarea>
        </form></td>
      </tr>
      <tr>
        <td width="98">Date</td>
        <td width="120"><?php echo $fdate; ?>&nbsp;</td>
      </tr>
      <tr>
        <td>Fid</td>
        <td><?php echo $s1; ?>&nbsp;</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><?php
	if($reply=="")
	   echo "<b><font color='red'>Reply not ready...Please wait";
	   else
	   {
	?><table width="200" border="3">
      <tr>
        <td colspan="2"><div align="center">REPLY</div></td>
      </tr>
      <tr>
        <td height="83" colspan="2"><form name="form2" method="post" action="">
          <textarea name="textarea2" cols="35"><?php echo $reply; ?></textarea>
        </form></td>
      </tr>
      <tr>
        <td width="117">Date</td>
        <td width="114"><?php echo $rdate; ?>&nbsp;</td>
      </tr>
    </table><?php
	}
	?></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
