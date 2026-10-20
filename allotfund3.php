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
    <td width="34" height="162">&nbsp;</td>
    <td colspan="6" valign="top"><div align="center">
        <p>ALLOT FUND</p>
        <form name="form1" method="post" action="request2.php">
          <p>
            <?php
			$reqno=$_POST['c1'];
		  
		  $comment=$_POST['t2'];
		  $appamount=$_POST['t3'];
		  
		  include("connection.php");
		  session_start();
		$invid=$_SESSION["invid"];
            $s=mysql_query("select *from cmprequest where invid='$invid'and reqno not in(select reqno from reqresponse where respstatus='y') and reqno not in (select reqno from allotfund)");
			if(mysql_num_rows($s)==0)
			echo"no request";
			else
			{
			
			?>
			
			
		  </p>
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
    <td width="185">&nbsp;</td>
  </tr>
  <tr>
    <td height="1"></td>
    <td width="5"></td>
    <td width="262" rowspan="2" valign="top"><table width="262" border="1">
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
    <td width="4"></td>
    <td width="770"></td>
    <td width="4"></td>
    <td width="38"></td>
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
    <td colspan="2" valign="top"><form name="form3" method="post" action="request3.php">
      <table width="235" border="1">
        <tr>
          <td width="128"><div align="center">Approved Amount </div></td>
          <td width="79"><?php  echo $appamount;?> &nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">COMMENT</div></td>
          </tr>
        <tr>
          <td colspan="2"><textarea name="t2" id="t2"><?php   echo $comment;?></textarea></td>
          </tr>
        <tr>
          <td colspan="2">
              <div align="center">
                <?php
		   $appdate=date("Y")."-".date("m")."-".date("d") ;
		    $s=mysql_query("select * from allotfund where reqno=$reqno");
		  
		$s="insert into allotfund values('$reqno','$appamount','$appdate','$comment')";
		  mysql_query($s);
		  
		  echo"process success";
		  
		  ?>
</div></td></tr>
      </table>
	  <?php  
		  echo"<input type='hidden' name='c1' value='$reqno'>";
		  
		  
		  
		  ?>
	  
	  
    </form></td>
  </tr>
</table>
</body>
</html>
