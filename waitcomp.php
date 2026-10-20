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
    <td width="1145" rowspan="3" valign="top"><div align="center">WAITING  COMPANY 
        <p>
          <?php
			include("connection.php");
			 $s=mysql_query("select* from company where cmpid not in (select cmpid from cmpapproval)");
			if(mysql_num_rows($s)==0)
			echo"<b> no comments";
			else
			{
			echo"<table border='1'  width='100%'  bgcolor='#ooffaa''><tr><th>Cmpid</th><th>Company Name</th><th>Address</th><th>Company Type</th></th><th>location</th><th>Regplace</th><th>pin</th><th>phone no</th><th>district</th><th>state</th><th>country</th><th>Last year profit</th><th>description</th><th>asset</th><th>accno</th><th>bank name</th><th>ifsc</th><th>regdate</th></tr>";
			while($row=mysql_fetch_array($s))
			{
			echo"<tr align='center' bgcolor='#aabbcc'><td>$row[0]</td><td>$row[1]</td><td>$row[18]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td><td>$row[16]</td><td>$row[17]</td></tr>";
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
