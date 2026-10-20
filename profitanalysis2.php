<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1343" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="64" height="33">&nbsp;</td>
    <td colspan="4" valign="top"><div align="center">PROFIT ANALYSIS
      </div>      <div align="center"></div></td>
    <td width="255">&nbsp;</td>
    <td width="185">&nbsp;</td>
    <td width="346">&nbsp;</td>
    <td width="11">&nbsp;</td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td width="27">&nbsp;</td>
    <td width="257">&nbsp;</td>
    <td width="164">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="121" colspan="2" valign="top"><?php
		 $reqno=$_POST['t1'];
	
			include("connection.php");
			session_start();
			$invid=$_SESSION["invid"];
			 $s=mysql_query("select * from cmprequest a,allotfund b where a.reqno=b.reqno and a.invid='$invid' and a.reqno in (select reqno from issuefund) and a.reqno not in (select reqno from invcompletion)");
			if(mysql_num_rows($s)==0)
			echo"<b> no request";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Reqno</th><th>Cmpid</th><th>Appamount</th><th>AppDate</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[9]</td><td>$row[10]</td><td><form action='profitanalysis2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td rowspan="2" valign="top"><table width="257" border="1">
      <!--DWLayoutTable-->
      <tr>
        <td colspan="2"><div align="center">REQUEST DETAILS
                <?php     
		  
		    $s=mysql_query("select * from cmprequest where reqno='$reqno'");
			    
			  if($row=mysql_fetch_array($s))
			  {
		   $reqno=$row[0];
	 $reqamt=$row[3];
	 $reqdate=$row[5];
	 $cmpid=$row[1];
	 }
		  
		  ?>
        </div></td>
      </tr>
      <tr>
        <td width="167">Reqno</td>
        <td width="74"><?php   echo $reqno ?>
    &nbsp;</td>
      </tr>
      <tr>
        <td>Req amount</td>
        <td><?php   echo $reqamt ?>
    &nbsp;</td>
      </tr>
      <tr>
        <td>Req date</td>
        <td><?php   echo $reqdate ?>
    &nbsp;</td>
      </tr>
    </table></td>
    <td colspan="4" rowspan="3" valign="top"><div align="center">COMPANY DETAILS
          <?php
		    
	 include("connection.php");

	
			  
			  $s=mysql_query("select * from company where cmpid='$cmpid'");
			  
			  if($row=mysql_fetch_array($s))
			  {
			  $cmpid=$row[0];
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
                </div>      <table width="617" border="0">
        <tr>
          <td width="152">Owner Name</td>
          <td width="110"><?php echo $s1; ?></td>
          <td width="160">Place</td>
          <td width="177"><?php echo $s4; ?>&nbsp;</td>
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
    <td valign="top"><script language="javascript">
	function abc()
	{
	if(document.form3.t2.value=="" || document.form3.t3.value=="")
	{
	alert("Please Enter the Details");
	return(false);
	} 
	var x,y;
	x=Number(document.form3.t2.value);
	y=Number(document.form3.t0.value);

	if(x>y)
	{
	alert("Alloted Amount should not greater than the balance amount");
	return(false);
	}
	}
	
	
	</script>
	  <?php
			include("connection.php");
			
			 $s=mysql_query("select* from cmprofit where reqno='$reqno' and invpaydate is null");
			if(mysql_num_rows($s)==0)
			echo"<b> no entries";
			else
			{
			$totshare=0;
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Penno</th><th>amount</th><th>Invshare</th><th>Edate</th><th>Wdetails</th><th>Documents</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			$totshare=$totshare+ $row[2];
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td><form action='down4.php' method='post'><input type='hidden' name='t1' value='$row[6]'><input type='submit' value='Download'></form></td></tr>";
			}
			echo"</table>";
			echo "<br><b>Total Share->  $totshare";
			}
			
			?>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="64">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="48">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="68"></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top"><?php
		
	
			include("connection.php");
			//session_start();
			//$invid=$_SESSION["invid"];
			
			 $s=mysql_query("select * from cmppay where invid='$invid' and cmpid='$cmpid'");
			if(mysql_num_rows($s)==0)
			echo"<b> no request";
			else
			{
			$totamount=0;
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Payment no</th><th>Invid</th><th>Cmpid</th><th>Amount</th><th>Payment mode</th><th>Payment Details</th><th>payment date</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			$totamount=$totamount+ $row[3];
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[2]</td><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><form action='profitanalysis2.php' method='post'></form></tr>";
			}
			echo"</table>";
			}
			echo "<br><b>Total Amount->  $totamount";
			$balance=$totamount-$totshare;
			echo "<br><b> balance-> $balance";
			?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="451"></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</body>
</html>
