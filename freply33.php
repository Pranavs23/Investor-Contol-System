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

<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="29" height="36">&nbsp;</td>
    <td colspan="5" valign="top"><div align="center" class="style1">Feedback Reply to Investor</div></td>
    <td width="186">&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="305">&nbsp;</td>
    <td width="85">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="5" valign="top"><?php 
	include("connection.php");
	$s1=$_POST["t1"];
	$reply=$_POST["t2"];
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
    <td width="4" height="19">&nbsp;</td>
    <td width="251" rowspan="3" valign="top">
	<?php
	
	$s=mysql_query("select * from feedback where fid=$s1");
	if($row=mysql_fetch_array($s))
	{
	$feedback=$row[1];
	$fdate=$row[2];
	$invid=$row[6];
	
	}
	
	?>	<table width="231" border="3">
        <tr>
          <td colspan="2"><div align="center">Details</div></td>
        </tr>
        <tr>
          <td>fid
          <div align="center"></div></td>
          <td><?php echo $s1;  ?>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">feedback</div></td>
        </tr>
        <tr>
          <td height="117" colspan="2"><form name="form1" method="post" action="">
            <textarea name="t1" cols="35" rows="7" id="t1"><?php echo $feedback; ?></textarea>
          </form></td>
        </tr>
        <tr>
          <td width="113" height="32">date</td>
          <td width="118" height="32"><?php  echo $fdate;   ?>&nbsp;</td>
        </tr>
    </table></td>
    <td width="4">&nbsp;</td>
    <td colspan="2" valign="top"><div align="center">INVESTOR DETAILS
          <?php
		  $s=mysql_query("select * from investor where invid='$invid'");
		  if($row=mysql_fetch_array($s))
		  {
		  $name=$row[1];
		    $s2=$row[2];
			  $s3=$row[3];
			    $s4=$row[4];
				  $s5=$row[5];
				    $s6=$row[6];
		    $s7=$row[7];
			  $s8=$row[8];
			    $s9=$row[9];
				  $upfname=$row[10];
				    $s11=$row[11];
					  $s12=$row[12];
					    $s16=$row[14];
	
		  }
		  ?>
        </div></td>
    <td>&nbsp;</td>
    <td rowspan="4" valign="top"><form name="form2" method="post" action="freply33.php">
        <table width="200" border="3">
          <tr>
            <td><div align="center">Reply</div></td>
          </tr>
          <tr>
            <td height="122"><?php  echo $reply; ?><textarea name="t2" cols="35" rows="5" id="textarea"></textarea></td>
          </tr>
          <tr>
            <td height="21"><div align="center">
              <?php
			
			$rdate=date("Y")."-".date("m")."-".date("d");
			$s="update feedback set reply='$reply',rdate='$rdate'  where fid=$s1";
			
			mysql_query($s);
			echo "Reply send";
			
			
			?>
            </div></td>
          </tr>
        </table>
	    <?php
	  echo "<input type='hidden' name='t1' value='$s1'>";
	  
	  ?>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="246">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><table width="543" border="1" align="left">
      <tr>
        <td width="150">Name</td>
        <td width="109"><?php echo $name ?>&nbsp;</td>
        <td width="157">Place</td>
        <td width="194"><?php echo $s4; ?>&nbsp;</td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><?php echo $s16; ?>&nbsp;</td>
        <td>Pin</td>
        <td><?php echo $s5; ?>&nbsp;</td>
      </tr>
      <tr>
        <td>Address </td>
        <td><?php echo $s2; ?>&nbsp;</td>
        <td>phone</td>
        <td><?php echo $s6; ?>&nbsp;</td>
      </tr>
      <tr>
        <td>District</td>
        <td><?php echo $s7; ?>&nbsp;</td>
        <td>State</td>
        <td><?php echo $s8; ?>&nbsp;</td>
      </tr>
      <tr>
        <td>location</td>
        <td><?php echo $s3; ?>&nbsp;</td>
        <td>Investment Details</td>
        <td><?php echo $s11; ?>&nbsp;</td>
      </tr>
      <tr>
        <td>Country</td>
        <td><?php echo $s9; ?>&nbsp;</td>
        <td colspan="2"><form name="form1" method="post" action="down.php">
            <input type="submit" name="Submit2" value="Download Proof">
            <?php
				echo "<input type='hidden' name='t1' value='$upfname'>";
				?>
        </form></td>
      </tr>
      <tr>
        <td>asset</td>
        <td><?php echo $s12; ?>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    <p></p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="432">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="38">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="37"></td>
    <td width="6"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
