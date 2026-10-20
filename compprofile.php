<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1178" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="272" height="33">&nbsp;</td>
    <td width="606">&nbsp;</td>
    <td width="300">&nbsp;</td>
  </tr>
  <tr>
    <td height="390">&nbsp;</td>
    <td valign="top"><div align="center">COMPANY PROFILE <?php
		    
	 include("connection.php");
	 session_start();
		$cmpid=$_SESSION["cmpid"];
			  
			  $s=mysql_query("select * from company where cmpid='$cmpid'");
			  
			  if($row=mysql_fetch_array($s))
			  {
			  $invid=$row[0];
			  $s1=$row[1];
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
        <table width="770" border="0">
          <tr>
            <td width="150">Owner Name</td>
            <td width="174"><?php echo $s1; ?></td>
            <td width="164">Place</td>
            <td width="254"><?php echo $s4; ?>&nbsp;</td>
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
            <td colspan="4">&nbsp;</td>
          </tr>
        </table>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="430">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>