<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1284" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="224" height="30">&nbsp;</td>
    <td colspan="3" valign="top"><div align="center">GRANT APPROVAL TO COMPANY </div></td>
    <td width="26">&nbsp;</td>
    <td width="288">&nbsp;</td>
    <td width="23">&nbsp;</td>
  </tr>
  <tr>
    <td height="349" colspan="2" valign="top"><?php
			include("connection.php");
			$cmpid=$_POST['t1'];

			$status=$_POST["r"];
			$comment=$_POST["t2"];
			
			 $s=mysql_query("select* from company where cmpid not in (select cmpid from cmpapproval)");
			if(mysql_num_rows($s)==0)
			echo"<b> no companies";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Cmpid</th><th>Name</th><th>place</th><th>Date</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[4]</td><td>$row[17]</td><td><form action='cmpapproval2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="4">&nbsp;</td>
    <td width="547" valign="top"><div align="center">
        <div align="center">
          <p align="left"><strong>Details</strong><?php
		  $s=mysql_query("select * from company where cmpid='$cmpid'");
		  if($row=mysql_fetch_array($s))
		  {
		  $s1=$row[1];
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
					   $s13=$row[13];
					    $s14=$row[14];
						 $s16=$row[16];
						  $s15=$row[15];
						  $ad=$row[18];
	
		  }
		  ?>
          </p>
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
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4">&nbsp;</td>
            </tr>
          </table>
		  <p>&nbsp;          </p>
        </div>
    </div></td>
    <td>&nbsp;</td>
    <td valign="top"><form name="form2" method="post" action="cmpapproval3.php">
      <table width="348" border="1">
        <tr>
          <td height="34" colspan="2"><div align="center">APPROVAL</div></td>
          </tr>
        <tr>
          <td width="152">status</td>
          <td width="180"><?php echo $status;  ?>&nbsp;            </td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">COMMENT</div></td>
          </tr>
        <tr>
          <td colspan="2"><textarea name="t1" id="t1" disabled><?php echo $comment; ?></textarea></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center"><?php
                 include("connection.php");
			 
			  $appdate=date("Y")."-".date("m")."-".date("d");
			  $s="insert into cmpapproval values('$cmpid','$status','$comment','$appdate')";
			  mysql_query($s);
			  
			echo"Process Sucess....";
			?>
            </div></td>
          </tr>
      </table>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="0"></td>
    <td width="172"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
