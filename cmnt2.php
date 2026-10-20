<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="971" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="190" height="35">&nbsp;</td>
    <td width="519">&nbsp;</td>
    <td width="262">&nbsp;</td>
  </tr>
  <tr>
    <td height="355">&nbsp;</td>
    <td valign="top"><div align="center">
      <p>POST YOUR COMMENT </p>
      <form name="form1" method="post" action="cmnt2.php"><?php
		$s1=$_POST['t1'];
		$s2=$_POST['t2'];
		$s3=$_POST['t3'];
		$s4=$_POST['t4'];
		
	?>
        <table width="331" border="1">
          <tr>
            <td width="144">Name</td>
            <td width="171"><?php echo $s1; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><?php echo $s2; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td><?php echo $s3; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>comment</td>
            <td><strong><?php echo $s4; ?></strong>&nbsp;</td>
          </tr>
          <tr>
            <td height="44" colspan="2"><div align="center">
			<?php
                 include("connection.php");
			  $cmno="cmno1";
			  $s=mysql_query("select * from comment order by cmno desc");
			  if($row=mysql_fetch_array($s))
			  {
			  $cmno=$row[0];
			  }
			  $cmno++;
			  $cdate=date("Y")."-".date("m")."-".date("d");
			  $s="insert into comment values('$cmno','$s1','$s2','$s3','$s4','$cdate')";
			  mysql_query($s);
			  
			echo"comment recieved";
			?>
			  
			  
			  
            </tr>
        </table>
      </form>
      <p>&nbsp;</p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="96">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
