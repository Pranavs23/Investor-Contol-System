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
    <td valign="top"><div align="center">COMPANY REGISTRATION
        <?php
		$s1=$_POST['t1'];
		$s2=$_POST['t2'];
		$s3=$_POST['t3'];
		$s4=$_POST['t4'];
		$s5=$_POST['t5'];
		$s6=$_POST['t6'];
		$s7=$_POST['t7'];
		$s8=$_POST['t8'];
		$s9=$_POST['t9'];
		
		$s11=$_POST['t11'];
	  $s12=$_POST['t12'];
	  $s13=$_POST['t13'];
	   
	    $s14=$_POST['t14'];
	$s15=$_POST['t15'];
	$s16=$_POST['t16'];
	//$s17=$_POST['t17'];
	$s19=$_POST['t19'];
	$s20=$_POST['t20'];
	$ad=$_POST['ad'];
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
            <td colspan="4"><?php    
	 include("connection.php");
			  $cmpid="C1000";
			  $s=mysql_query("select * from company order by cmpid desc");
			  if($row=mysql_fetch_array($s))
			  {
			  $cmpid=$row[0];
			  }
			  $cmpid++;
			  $regdate=date("Y")."-".date("m")."-".date("d");
			  
$filename=$_FILES["file"]["name"];
$x=explode(".",$filename);
$n=count($x);
$n--;
$ext=$x[$n];
$filename="$cmpid.$ext";

move_uploaded_file($_FILES["file"]["tmp_name"],"./cmpproof/$filename");



	
	
	
	
	$s="insert into company values('$cmpid','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$filename','$s11','$s12','$s13','$s14','$s15','$s16','$regdate','$ad')";
	mysql_query($s);

	 $s=mysql_query("select * from login ");
	 $s="insert into login values('$cmpid','$s19')";
	 
	 echo"Registration successfull 
	company id is $cmpid";
	mysql_query($s);
	
	
	
	
?></td>
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
