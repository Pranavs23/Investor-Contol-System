<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php //include("p2.php"); ?>
<table width="1258" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="142" height="321">&nbsp;</td>
    <td width="856" valign="top"><div align="center">
        <p class="style1">Announcements to All Invstors </p>
        <form name="form1" method="post" action="ann2.php">
         <?php
		 $s1=$_POST["t1"];
		 
		 ?> <table width="543" height="244">
            <tr>
              <td height="177"><div align="center">
                <textarea name="t1" cols="80" rows="7" id="t1" disabled><?php echo $s1; ?></textarea>
              </div></td>
            </tr>
            <tr>
              <td height="59"><div align="center">
              <?php
			  include("connection.php");
			  $anno=0;
			  $s=mysql_query("select * from announcement order by anno desc");
			  if($row=mysql_fetch_array($s))
			  {
			  $anno=$row[0];
			  
			  }
			  $anno++;
			  $andate=date("Y")."-".date("m")."-".date("d");
			  
			  $s="insert into announcement values($anno,'$s1','$andate','B')";
			  mysql_query($s);
			  echo "<b>Stored...The Number is $anno";
			  
			  
			  
			  ?></div></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
    </div></td>
    <td width="260">&nbsp;</td>
  </tr>
  <tr>
    <td height="65">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
