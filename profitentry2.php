<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="1172" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="59" height="19">&nbsp;</td>
    <td width="552">&nbsp;</td>
    <td width="561">&nbsp;</td>
  </tr>
  <tr>
    <td height="345">&nbsp;</td>
    <td valign="top"><div align="center">
      <p>PROFIT ENTRY
        <?php
		$amount=$_POST['t1'];
		$comment=$_POST['t3'];
		include("connection.php");
	 session_start();
		$cmpid=$_SESSION["cmpid"];
            $s=mysql_query("select *from cmprequest where cmpid='$cmpid' and reqno in (select reqno from issuefund)and reqno not in (select reqno from invcompletion)");
			if(mysql_num_rows($s)==0)
			echo"<b>No investors";
			else
			{
			$row=mysql_fetch_array($s);
			$reqno=$row[0];
			$profitper=$row[6];
			?>
	
      </p>
      <form name="form1" method="post" action="">
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
<?php




?>            </div></td>
          </tr>
          <tr>
            <td width="136">Issued</td>
            <td width="126">&nbsp;
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
          <tr>
            <td>Profit % </td>
            <td><?php echo $profitper; ?>&nbsp;</td>
          </tr>
          <tr>
            <td>share</td>
            <td><?php
			
			//calculate 
			
			$issueper=round(($issued*100)/$appamt,2);
$payamt=round(($amount*$issueper)/100,2);
$payper=round(($payamt*$profitper)/100,2);

echo $payper;
			
			
			
			
			
			?></td>
          </tr>
          <tr>
            <td>Issued percentage</td>
            <td><?php  echo $issueper;  ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Payed amount </td>
            <td><?php  echo $payamt;  ?>&nbsp;</td>
          </tr>
          <tr>
            <td>Payment Percentage </td>
            <td><?php  echo $payper;  ?>&nbsp;</td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="345" border="1">
          <tr>
            <td width="227">Amount</td>
            <td width="212"><?php  echo $amount;  ?>&nbsp;</td>
          </tr>
          <tr>
            <td>upload document</td>
            <td>selected</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">Work Details </div></td>
            </tr>
          <tr>
            <td colspan="2"><textarea name="t3" cols="50" id="t3"><?php  echo $comment;  ?></textarea></td>
            </tr>
          <tr>
            <td colspan="2"><div align="center">
                <?php
			 $penno=0;
			  $s=mysql_query("select * from cmprofit  where reqno= $reqno order by penno desc");
			  if($row=mysql_fetch_array($s))
			  {
			  $penno=$row[1];
			  }
			  $penno++;
		   $edate=date("Y")."-".date("m")."-".date("d") ;
		   $filename=$_FILES["file"]["name"];
$x=explode(".",$filename);
$n=count($x);
$n--;
$ext=$x[$n];
$filename="$penno.$ext";

move_uploaded_file($_FILES["file"]["tmp_name"],"./docproof/$filename");

		    
		$s="insert into cmprofit(reqno,penno,amt,invshare,edate,wdetails,docfile) values('$reqno','$penno','$amount','$payper','$edate','$comment','$filename')";
		  mysql_query($s);
		  
		  echo"process success";
		  
		  ?>
            </div></td>
            </tr>
        </table>
		
	<?php } ?>
		
      </form>
	
      <p>&nbsp;</p>
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="231">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
