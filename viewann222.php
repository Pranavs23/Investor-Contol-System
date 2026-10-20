<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php // include ("p1.php"); ?>
<table width="946" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="33" height="44">&nbsp;</td>
    <td width="162">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>Announcement</strong></div></td>
    <td width="158">&nbsp;</td>
    <td width="100">&nbsp;</td>
  </tr>
  <tr>
    <td height="13"></td>
    <td colspan="2" rowspan="2" valign="top"><?php
	$s1=$_POST["t1"];
	
			include("connection.php");
			 $s=mysql_query("select* from announcement where anmode='C'");
			if(mysql_num_rows($s)==0)
			echo"<b> no comments";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Announcement no</th><th>Anndate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			if($s1==$row[0])
			echo"<tr align='center' bgcolor='#00bbcc'><td>$row[0]</td><td>$row[2]</td><td><form action='viewann222.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			else
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[2]</td><td><form action='viewann222.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="38"></td>
    <td width="204"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="286"></td>
    <td></td>
    <td colspan="2" valign="top"><div align="center">View Announcement
       <?php
		$s=mysql_query("select* from announcement where anno=$s1");
		if($row=mysql_fetch_array($s))
		{
		$announcement=$row[1];
		$andate=$row[2];
		}
		?> 
		<table width="272" border="3">
          <tr>
            <td width="126">Announcement no </td>
            <td width="126"><?php echo $s1 ; ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Announcement</div></td>
          </tr>
          <tr>
            <td colspan="2"><form name="form1" method="post" action="viewann222.php">
              <textarea name="textarea" cols="40"><?php echo $announcement; ?></textarea>
            </form></td>
          </tr>
          <tr>
            <td>date</td>
            <td><?php echo $andate; ?>&nbsp;</td>
          </tr>
        </table>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="251">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
