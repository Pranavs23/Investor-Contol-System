<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1157" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="148" height="434">&nbsp;</td>
    <td width="890" valign="top"><div align="center">
        <p>INVESTOR REGISTRATION</p>
        <form action="" method="post" enctype="multipart/form-data" name="form1">
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
	   
	    $s14=$_POST['t14'];
	$s15=$_POST['t15'];
	$s16=$_POST['r'];
	?>
          <table width="770" border="1">
            <tr>
              <td width="150">Name</td>
              <td width="174"><?php echo $s1 ?>&nbsp;</td>
              <td width="164">Place</td>
              <td width="254"><?php echo $s4; ?>&nbsp;</td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><?php echo $s16; ?>&nbsp;</td>
              <td>Pin</td>
              <td><?php echo $s5; ?>&nbsp;</td>
            </tr>
            <tr>
              <td>Address              </td>
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
              <td>upload file</td>
              <td>selected</td>
            </tr>
            <tr>
              <td>asset</td>
              <td><?php echo $s12; ?>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="4"><div align="center">
              <?php
			
			
			    
	 include("connection.php");
			  $invid="I1000";
			  $s=mysql_query("select * from investor order by invid desc");
			  if($row=mysql_fetch_array($s))
			  {
			  $invid=$row[0];
			  }
			  $invid++;
			  $regdate=date("Y")."-".date("m")."-".date("d");
			  
$filename=$_FILES["f1"]["name"];
$x=explode(".",$filename);
$n=count($x);
$n--;
$ext=$x[$n];
$filename="$invid.$ext";

move_uploaded_file($_FILES["f1"]["tmp_name"],"./invproof/$filename");

	$s="insert into investor values('$invid','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$filename','$s11','$s12','$regdate','$s16')";
	mysql_query($s);
	 $s=mysql_query("select * from login ");
	 $s="insert into login values('$invid','$s14')";
	mysql_query($s);
	
	echo"Registration successfull 
	userid is $invid";
	
	
?></div></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
    </div></td>
    <td width="119">&nbsp;</td>
  </tr>
</table>
</body>
</html>
