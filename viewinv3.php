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
    <td colspan="3" valign="top"><div align="center">INVESTOR DETAILS </div></td>
    <td width="26">&nbsp;</td>
    <td width="288">&nbsp;</td>
    <td width="23">&nbsp;</td>
  </tr>
  <tr>
    <td height="349" colspan="2" valign="top"><?php
	$invid=$_POST['t1'];
	$s22=$_POST['t2'];
	$s33=$_POST['t3'];
	$s55=$_POST['t5'];
	
			include("connection.php");
			 $s=mysql_query("select* from investor where invid in (select invid from invapproval where appstatus='y')");
			if(mysql_num_rows($s)==0)
			echo"<b> no comments";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Invid</th><th>Name</th><th>Regplace</th><th>Date</th><th>click</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[4]</td><td>$row[13]</td><td><form action='invapproval2.php' method='post'><input type='hidden' name='t1' value='$row[0]'><input type='submit' value='View'></form></td></tr>";
			}
			echo"</table>";
			}
			
			?>      &nbsp;</td>
    <td width="4">&nbsp;</td>
    <td width="547" valign="top"><div align="center">
        <div align="center">
          <p align="left"><?php
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
          </p>
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
                <input type="submit" name="Submit" value="Download Proof">
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
          <p>&nbsp;          </p>
        </div>
    </div></td>
    <td>&nbsp;</td>
    <td valign="top"><form action="invapproval3.php" method="post" enctype="multipart/form-data" name="form2">
      <table width="348" border="1">
        <tr>
          <td height="34" colspan="2"><div align="center">EXPECTATION</div></td>
          </tr>
        <tr>
          <td width="152">Expectation Amount </td>
          <td width="180">&nbsp;            <?php echo $s22; ?></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">DETAILS</div></td>
          </tr>
        <tr>
          <td colspan="2"><textarea name="t3" cols="50" rows="7" id="t3" disabled><?php echo $s33; ?></textarea></td>
        </tr>
        <tr>
          <td>Profit Percentage </td>
          <td><?php echo $s55; ?>&nbsp;</td>
        </tr>
        <tr>
          <td>Select Document </td>
          <td>selected</td>
        </tr>
        <tr>
          <td colspan="2"><?php
                 include("connection.php");
				  $reqno=100;
			  $s=mysql_query("select * from cmprequest order by reqno desc");
			  if($row=mysql_fetch_array($s))
			  {
			  $reqno=$row[0];
			  }
			  $reqno++;
			  $reqdate=date("Y")."-".date("m")."-".date("d");
			 
			$filename=$_FILES["f"]["name"];
$x=explode(".",$filename);
$n=count($x);
$n--;
$ext=$x[$n];
$filename="$reqno.$ext";

move_uploaded_file($_FILES["f"]["tmp_name"],"./cmpproof1/$filename");
session_start();
		$cmpid=$_SESSION["cmpid"];

	$s="insert into cmprequest values('$reqno','$cmpid','$invid','$s22','$s33','$reqdate','$s55','$filename')";
	
			  mysql_query($s);
			  
			echo"Process Sucess....";
			?><div align="center"></div></td>
          </tr>
      </table>
      <?php
	  echo "<input type='hidden' name='t1' value='$invid'>";
	  ?>
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
