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
    <td colspan="5" valign="top"><div align="center" class="style1">Feedback Reply to Company </div></td>
    <td width="161">&nbsp;</td>
    <td width="9">&nbsp;</td>
    <td width="305">&nbsp;</td>
    <td width="113">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="4" valign="top"><?php 
	$s1=$_POST["t1"];
	  $s22=$_POST["t2"];
			
	
	include("connection.php");
	$s=mysql_query("select*from feedback  where cmpid is not null and reply is null");
	if(mysql_num_rows($s)==0)
	  echo "<center><b><font color='red'>No replies...";
	  else
	  {
	
	echo "<center><table border='1' width='50%'><tr><th>Fid</th><th>Admin staffid</th><th>Fdate</th><th>Click</th><tr>";
	while($row=mysql_fetch_array($s))
	{
	echo"<tr  align='center'><td>$row[0]</td><td>$row[5]</td><td>$row[2]</td><td><form action='freply2.php'  method='post'><input type='hidden' name='t1'  value='$row[0]'><input type='submit' value='View'></form></td></tr>";
	}
	echo"</table>";
	}
	?></td>
    <td width="4" height="245">&nbsp;</td>
    <td width="251" rowspan="2" valign="top">
	<?php
	echo "select * from feedback where fid=$s1";
	$s=mysql_query("select * from feedback where fid=$s1");
	if($row=mysql_fetch_array($s))
	{
	$feedback=$row[1];
	$fdate=$row[2];
	$cmpid=$row[5];
	
	}
	
	?>	<table width="231" border="3">
        <tr>
          <td colspan="2"><div align="center">Details</div></td>
        </tr>
        <tr>
          <td>fid
          <div align="center"></div></td>
          <td><?php echo $s1;     ?>&nbsp;</td>
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
    <td colspan="2" valign="top"><div align="center">COMPANY DETAILS
          <?php
		    
	 include("connection.php");
	
			  
			  $s=mysql_query("select * from company where cmpid='$cmpid'");
			  
			  if($row=mysql_fetch_array($s))
			  {
			  $invid=$row[0];
			  $name=$row[1];
			   $s2=$row[2];
			    $s3=$row[3];
				 $s4=$row[4];
				  $s5=$row[5];
				   $s6=$row[6];
				    $s7=$row[7];
					 $s8=$row[8];
					  $s9=$row[9];
					   $s10=$row[10];
					    $s11=$row[11];
						 $s12=$row[12];
						  $s13=$row[13];
						    $s14=$row[14];
						      $s15=$row[15];
							     $s16=$row[16];
								   
									   $ad=$row[18];
			}  
	?>
                    </div>      <table width="593" border="0">
        <tr>
          <td width="152">Owner Name</td>
          <td width="118"><?php echo $s1; ?></td>
          <td width="168">Place</td>
          <td width="314"><?php echo $s4; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Company Type</td>
          <td><?php echo $s2; ?>&nbsp;</td>
          <td>Pin</td>
          <td><?php echo $s5; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Address</td>
          <td><?php echo $ad; ?>&nbsp;</td>
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
          <td>Description</td>
          <td>&nbsp;<?php echo $s12; ?></td>
        </tr>
        <tr>
          <td>Country</td>
          <td><?php echo $s9; ?>&nbsp;</td>
          <td>upload License Proof </td>
          <td>Selected</td>
        </tr>
        <tr>
          <td>Last Year Profit </td>
          <td>&nbsp;<?php echo $s11; ?></td>
          <td>Account Number </td>
          <td><?php echo $s14; ?></td>
        </tr>
        <tr>
          <td>Bank Name </td>
          <td><?php echo $s15; ?>&nbsp;</td>
          <td>IFSC code </td>
          <td><?php echo $s16; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>asset</td>
          <td><?php echo $s13; ?>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4"></td>
        </tr>
                              </table></td>
    <td>&nbsp;</td>
    <td rowspan="3" valign="top"><form name="form2" method="post" action="freply3.php">
        <table width="200" border="3">
          <tr>
            <td><div align="center">Reply</div></td>
          </tr>
          <tr>
            <td height="122"><textarea name="t2" cols="35" rows="5" id="t2"><?php echo $s22;     ?></textarea></td>
          </tr>
          <tr>
            <td height="21"><div align="center">
              <?php
			
			$rdate=date("Y")."-".date("m")."-".date("d");
			$s="update feedback set reply='$s22',rdate='$rdate'  where fid=$s1";
			
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
    <td height="61">&nbsp;</td>
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
