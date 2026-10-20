<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1213" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="88" height="105">&nbsp;</td>
    <td width="713" valign="top"><div align="center">
        <p>ALLOTMENT RESPONSE</p>
        <form name="form1" method="post" action="fundresponse2.php">
          <p><?php
		  include("connection.php");
		  session_start();
		$cmpid=$_SESSION["cmpid"];
            $s=mysql_query("select *from cmprequest where cmpid='$cmpid' and reqno in (select reqno from reqresponse where respstatus='y')and reqno not in(select reqno from issuefund)");
			if(mysql_num_rows($s)==0)
			echo"no response";
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
        <p>&nbsp;</p>
    </div></td>
    <td width="412">&nbsp;</td>
  </tr>
  <tr>
    <td height="229">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
