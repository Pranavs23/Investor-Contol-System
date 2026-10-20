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
        <p>FUND ISSUE STATUS </p>
        <form name="form1" method="post" action="fundissuestatus2.php">
          <p>
            <?php
			$reqno=$_POST['c1'];
		  include("connection.php");
		  session_start();
		$cmpid=$_SESSION["cmpid"];
            $s=mysql_query("select *from cmprequest where cmpid='$cmpid' and reqno in (select reqno from allotfund )and reqno not in(select reqno from invcompletion)");
			if(mysql_num_rows($s)==0)
			echo"not issued";
			else
			{
			
			?>
</p>
          <table width="401" border="0">
            <tr>
              <td width="164">Select Request Number</td>
              <td width="127"><select name="c1">
                  <?php 
			  echo "<option>$reqno</option>";
		 while($row=mysql_fetch_array($s))
		 {
		 if($row[0]==$reqno)
		  continue;
		 echo "<option> $row[0]</option>";
		 }
		 ?>
              </select></td>
              <td width="96"><input type="submit" name="Submit" value="Submit"></td>
            </tr>
          </table>
          <p>
            <?php
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
          <td colspan="2"><div align="center">REQUEST
                  <?php  
		  
		  $s=mysql_query("select *from cmprequest where reqno='$reqno'");
		  if($row=mysql_fetch_array($s));
		  {
		  $invid=$row[2];
		  $expamount=$row[3];
		  $reqdate=$row[5];
		  $reqdetails=$row[4];
		  $pper=$row[6];
		  $docfname=$row[7];
		  }
		  
		  
		  
		  ?>
          </div></td>
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
		  
		  
		  
		  ?>
          </form></td>
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
    <td valign="top"><div align="center">INVESTOR DETAILS
            <?php
		  $s=mysql_query("select * from investor where invid='$invid'");
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
					    $s16=$row[14];
	
		  }
		  ?>
            <table width="543" border="1" align="left">
              <tr>
                <td width="150">Name</td>
                <td width="109"><?php echo $s1 ?>&nbsp;</td>
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
                    <input type="submit" name="Submit5" value="Download Proof">
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
            <p></p>
    </div></td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top">      <form name="form3" method="post" onSubmit="return abc()" action="invcomp3.php">
        <table width="278" border="1">
          <!--DWLayoutTable-->
          <tr>
            <td colspan="2"><div align="center">Issue Details
                    <?php     
		  
		    $s=mysql_query("select * from allotfund where reqno='$reqno'");
			    
			  if($row=mysql_fetch_array($s))
			  {
			  $appamt=$row[1];
			  
			  }
			  
			  
			  ?>
            </div></td>
          </tr>
          <tr>
            <td width="118">Issued</td>
            <td width="144">&nbsp;
                <?php
			  $issued=0;
			  $s=mysql_query("select * from issuefund where reqno='$reqno'");
			  while($row=mysql_fetch_array($s))
			  {
			  $issued=$issued+$row[2];
			  }
			
			  
			  $balance= $appamt-$issued;
			  
			  
			  
			  
			  ?>
                <?php echo $issued;?></td>
          </tr>
          <tr>
            <td>Alloted</td>
            <td>&nbsp;
                <?php  echo $appamt;  ?></td>
          </tr>
          <tr>
            <td>Balance</td>
            <td><?php   echo $balance; echo "<input type='hidden' name='t0' value='$balance'>"; ?>
      &nbsp;</td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>
</body>
</html>
