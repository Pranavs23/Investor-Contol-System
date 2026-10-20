<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php //include("p2.php"); ?>

<table width="946" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="33" height="44">&nbsp;</td>
    <td width="162">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center"><strong>Users Comment</strong></div></td>
    <td width="163">&nbsp;</td>
    <td width="95">&nbsp;</td>
  </tr>
  <tr>
    <td height="299">&nbsp;</td>
    <td colspan="2" valign="top"><?php
	$s1=$_POST["t1"];

			include("connection.php");
			 $s=mysql_query("select* from comment");
			if(mysql_num_rows($s)==0)
			echo"<b> no comments";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>cmNo</th><th>Name</th><th>Date</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			if($s1==$row[0])
			echo"<tr align='center' bgcolor='#00bbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[5]</td><td><form action='userscomment2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View' disabled></form></td></tr>";
			else
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[5]</td><td><form action='userscomment2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="22">&nbsp;</td>
    <td colspan="2" valign="top"><form action="userscomment3.php" method="post" name="form1">
      <div align="center">
        <p><strong>      Details
</strong><?php
		$s=mysql_query("select* from comment where cmNo=$s1");
		if($row=mysql_fetch_array($s))
		{
		$name=$row[1];
		$phone=$row[2];
		$email=$row[3];
		$comment=$row[4];
		$date=$row[5];
		}
		?>
		</p>
        <table width="279" border="3">
          <tr>
            <td>cmNo</td>
            <td><?php echo $s1 ; ?>&nbsp;</td>
          </tr>
          <tr>
            <td width="143">Name</td>
            <td width="148"><?php echo $name ; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><?php echo $phone ; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>E-mail </td>
            <td><?php echo $email ; ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">comment</div></td>
          </tr>
          <tr>
            <td colspan="2"><textarea name="t4" cols="45" id="textarea"><?php echo $comment ; ?></textarea></td>
          </tr>
          <tr>
            <td>date</td>
            <td><?php echo $date; ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                  <?php
				  $s="delete from comment where cmno=$s1";
				  mysql_query($s);
				  echo "<b>Deleted";
				  
				  ?></div></td>
          </tr>
        </table>
        <p>&nbsp;
                  </p>
      </div>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="251">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="220">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
