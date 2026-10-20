<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1081" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="9" height="13"></td>
    <td width="729" rowspan="2" valign="top"><div align="center">
        <p>PAY AMOUNT TO INVESTOR</p>
        <p>          <?php
		include("connection.php");
		   session_start();
		$cmpid=$_SESSION["cmpid"];
            $s=mysql_query("select * from cmprofit a, cmprequest b where a.reqno=b.reqno and b.cmpid='$cmpid' and a.invpaydate is null");
			
			$gtot=0;
			if(mysql_num_rows($s)==0)
			echo"<b> no entries";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Penno</th><th>amount</th><th>Invshare</th><th>Edate</th><th>Wdetails</th><th>Documents</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			$gtot=$gtot+ $row[3];
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td><form action='down4.php' method='post'><input type='hidden' name='t1' value='$row[6]'><input type='submit' value='Download'></form></td></tr>";
			}
			echo"</table>";
			echo "Grand Total $gtot";
			}
			
			?>
</p>
        <p>&nbsp;        </p>
        <p>&nbsp;        </p>
    </div></td>
    <td width="16"></td>
    <td width="287"></td>
    <td width="40"></td>
  </tr>
  <tr>
    <td height="162"></td>
    <td></td><script>
	function abc()
	{
	if(document.form1.t2.value=="")
	{
	alert("Please Enter the details");
	return(false);
	}
	}
	</script>
    <td valign="top"><form name="form1" onSubmit="return abc()" method="post" action="payshare2.php">
   <?php if($gtot>0) {?>   <table width="256" border="0">
        <tr>
          <td width="92">Pay Mode </td>
          <td width="148"><select name="t1" id="t1">
            <option>Google Pay</option>
            <option>Bank Cheque</option>
            <option>Fund Transfer</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="2">Details</td>
          </tr>
        <tr>
          <td colspan="2"><textarea name="t2" cols="40" id="t2"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="Submit" value="Pay"></td>
        </tr>
      </table><?php
	  }

?>
    </form></td>
    <td></td>
  </tr>
  <tr>
    <td height="333">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
