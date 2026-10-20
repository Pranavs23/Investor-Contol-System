<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1302" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="86" height="162">&nbsp;</td>
    <td colspan="6" valign="top"><div align="center">
        <p>BREAK THE CONTRACT </p>
        <form name="form1" method="post" action="issuefund3.php">
          <?php
		  include("connection.php");
		  session_start();
		$invid=$_SESSION["invid"];
 $s=mysql_query("select *from cmprequest where invid='$invid' and reqno  in(select reqno from issuefund ) and reqno not in (select reqno from invcompletion)");
			if(mysql_num_rows($s)==0)
			echo"no request";
			else
			{
			
			?>
          <p>&nbsp;</p>
          <table width="401" border="0">
            <tr>
              <td width="164">Select Request Number</td>
              <td width="127"><select name="c1">
			  <?php 
		 while($row=mysql_fetch_array($s))
		 {
		 echo "<option> $row[0]</option>";
		 }
		 ?>
              </select></td>
              <td width="96"><input type="submit" name="Submit" value="Submit"></td>
            </tr>
          </table>
         <p><?php
		 }
		 ?>
		 
		 
		 
		 
		 
		 
		 &nbsp;</p>
        </form>
        </div></td>
    <td width="134">&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td width="7"></td>
    <td width="259" rowspan="2" valign="top"><table width="262" border="1">
        <!--DWLayoutTable-->
        <tr>
          <td colspan="2"><div align="center">REQUEST<?php  
		  $reqno=$_POST['c1']; 
		  $s=mysql_query("select *from cmprequest where reqno='$reqno'");
		  if($row=mysql_fetch_array($s));
		  {
		  $cmpid=$row[1];
		  $expamount=$row[3];
		  $reqdate=$row[5];
		  $reqdetails=$row[4];
		  $pper=$row[6];
		  $docfname=$row[7];
		  }
		  
		  
		  
		  ?></div></td>
        </tr>
        <tr>
          <td width="153">Expected Amount </td>
          <td width="93"><?php echo $expamount; ?>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">Request Details </div></td>
        </tr>
        <tr>
          <td colspan="2"><textarea name="textarea"><?php echo $reqdetails; ?> </textarea></td>
        </tr>
        <tr>
          <td>Request Date </td>
          <td><?php echo $reqdate; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Profit Percentage</td>
          <td><?php echo $pper; ?>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><form name="form2" method="post" action="down2.php">
              <div align="center">
                <input type="submit" name="Submit2" value="Download">
              </div>
          <?php  
		  echo"<input type='hidden' name='t1' value='$docfname'>";
		  
		  
		  
		  ?></form></td>
        </tr>
    </table></td>
    <td width="5"></td>
    <td width="370"></td>
    <td width="14"></td>
    <td width="25"></td>
    <td></td>
  </tr>
  <tr>
    <td height="252"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><div align="center">COMPANY DETAILS
        <?php
		    
	 include("connection.php");
	
			  
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
      </div>
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
          <td colspan="4"></td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top">
	<script language="javascript">
	function abc()
	{
	if(document.form3.t2.value=="" || document.form3.t3.value=="")
	{
	alert("Please Enter the Details");
	return(false);
	} 
	var x,y;
	x=Number(document.form3.t3.value);
	y=Number(document.form3.t0.value);

	if(x>y)
	{
	alert("Alloted Amount should not greater than the expected amount");
	return(false);
	}
	}
	
	
	</script><?php
	$appamount=0;
	
	$s=mysql_query("select * from allotfund where reqno='$reqno'");
	if($row=mysql_fetch_array($s))
		  {
		  $appamount=$row[1];
		  }
	?>
	
	<form name="form3" method="post" onSubmit="return abc()" action="break3.php">
      <table width="199" border="1">
        <tr>
          <td width="101">Business status </td>
          <td width="82"><select name="t1" id="t1">
            <option>excellent</option>
            <option>good</option>
                    </select></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">DETAILS</div></td>
          </tr>
        <tr>
          <td colspan="2"><textarea name="t2" id="t2"></textarea></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="Submit3" value="Submit">
			
          </div></td>
          </tr>
      </table>
	    <?php  
		  echo"<input type='hidden' name='c1' value='$reqno'>";
		  
		  
		  
		  ?>
	</form></td>
  </tr>
</table>
</body>
</html>
