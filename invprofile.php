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
        <p>MY PROFILE </p>
        <form action="" method="post" enctype="multipart/form-data" name="form1">
          <?php
			
			
			    
	 include("connection.php");
	 session_start();
		$invid=$_SESSION["invid"];
			  
			  $s=mysql_query("select * from investor where invid='$invid'");
			  
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
						    $s16=$row[14];
						   
			  
			  
			  
			  }

	
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
              </div></td>
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
