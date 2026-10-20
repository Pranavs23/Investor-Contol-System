<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function printf()
{
window.print();
}

</script>
<body>

<table width="1317" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutDefaultTable-->
  <tr>
    <td width="50" height="13"></td>
    <td width="1145" rowspan="3" valign="top"><div align="center">MY EXISTING  COMPANY 
        <p>
          <?php
			include("connection.php");
			session_start();
			$invid=$_SESSION["invid"];
			 $s=mysql_query("select * from cmprequest a,allotfund b where a.reqno=b.reqno and a.invid='$invid' and a.reqno in (select reqno from issuefund) and a.reqno not in (select reqno from invcompletion)");
			if(mysql_num_rows($s)==0)
			echo"<b> noT recieved";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Cmpid</th><th>Company Name</th><th>Address</th><th>Company Type</th></th><th>location</th><th>Regplace</th><th>pin</th><th>phone no</th><th>district</th><th>state</th><th>country</th><th>Last year profit</th><th>description</th><th>asset</th><th>accno</th><th>bank name</th><th>ifsc</th><th>regdate</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			$cmpid=$row[1];
			$ss=mysql_query("select * from  company where  cmpid='$cmpid'");
			if($row1=mysql_fetch_array($ss))
			{
			  
			  $s1=$row1[1];
			   $s2=$row1[2];
			    $s3=$row1[3];
				 $s4=$row1[4];
				  $s5=$row1[5];
				   $s6=$row1[6];
				    $s7=$row1[7];
					 $s8=$row1[8];
					  $s9=$row1[9];
					   $s10=$row1[10];
					    $s11=$row1[11];
						 $s12=$row1[12];
						  $s13=$row1[13];
						    $s14=$row1[14];
						      $s15=$row1[15];
							     $s16=$row1[16];
								     $s17=$row1[17];
									   $ad=$row1[18];
									   }
			echo"<tr align='center' bgcolor='#aabbcc'><td>$cmpid</td><td>$s1</td><td>$ad</td><td>$s2</td><td>$s3</td><td>$s4</td><td>$s5</td><td>$s6</td><td>$s7</td><td>$s8</td><td>$s9</td><td>$s11</td><td>$s12</td><td>$s13</td><td>$s14</td><td>$s15</td><td>$s16</td><td>$s17</td></tr>";
			}
			echo"</table>";
			}
			
			?> 
        </p>
    </div></td>
    <td width="25"></td>
    <td width="97"></td>
  </tr>
  <tr>
    <td height="33"></td>
    <td></td>
    <td valign="top"><form name="form1" method="post" action="">
      <input type="button" name="Button" value="Print" onClick="printf()">
    </form></td>
  </tr>
  <tr>
    <td height="323"></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
