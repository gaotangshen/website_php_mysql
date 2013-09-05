<html>
<head>
<meta http-equiv="Content-Type" content="text/html/php; charset=gb2312"/>
</head>
<body>
<?php ; 
include("head.php");
include ("conn.php");
?>
<!--<style>-->
<!--.space{-->
<!--height:250px;-->
<!--width:320px;-->
<!--}-->
<!--div.launch{-->
<!---->
<!--	-->
<!--	margin:20px auto;-->
<!--	height:100px;-->
<!--	width:1000px;-->
<!--}-->
<!--div.recent{-->
<!--	float:left;-->
<!--	margin-top:30px;-->
<!--	margin-left:100px;-->
<!--	width:700px;-->
<!--	height:300px;-->
<!--}-->

<div class="launch">
<?php
 if($_GET['another']){
	
	$sql4="delete from thumbtag.friend where friend='$_COOKIE[username]' AND username='$_GET[another]'";
	mysql_query($sql4)or die('Querry failed:'.mysql_error());
		echo "<script language=\"javascript\">alert('decline success');</script>";
	} 
$sql="select * from member where username='$_COOKIE[username]'";
$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
$row=mysql_fetch_array($querry);
?>
<label style="font-size:25px;font-weight:bold">Welcome back&nbsp;&nbsp;&nbsp;<?php echo $row[username];?></label><br>
<label style="color:gray;margin-left:167px"><?php echo $row[email];?></label>
</div>


<div style="margin:0 auto;width:1200px">
<div class="recent">
<label style="margin-top:50px;font-size:25px;font-weight:bold;color:#0066FF">Most popular recently</label>
<hr style="border: 1px dotted #ddd; width: 100%;margin-top:10px" />
<?php 
$sql1="SELECT filedata,AVG(rate) AS avg_rate
FROM rate 
WHERE TIMESTAMPDIFF(DAY,ratedate,NOW())<7
GROUP BY filedata
ORDER BY avg_rate DESC
limit 2
";
$querry1=mysql_query($sql1)or die('Query failed: ' . mysql_error());
while($row1=mysql_fetch_array($querry1)){
?>
<div style="float:left;width:350px;height:250px">
<a href="picture.php?picture_name=<?=$row1[filedata]?>"><img  class="space" src="/picture/<?=$row1[filedata]?>"/></a>


</div>

<?php
 }
?>

</div>
<div style="float:right;margin-right:100px;margin-top:50px;width:200px;height:200px; ">
<h3 style="color:#0066FF">Your Friends</h3>
 <table align="center">
<?php 
$sql="SELECT * FROM friend WHERE username='$_COOKIE[username]' and friend in (select username from friend where friend='$_COOKIE[username]')";
$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
while($row=mysql_fetch_array($querry)){ 	
?>

 <tr>
<td><a style="color:#191970;text-decoration: none; "
	href="friend3.php?user=<?=$row[friend]?>"><?=$row[friend];?></a></td>
</tr>
<?php }?>
</table>
<h3 style="color:#0066FF"> New Friend Request</h3>
 <table align="center">
<?php 
$sql4="SELECT * FROM friend WHERE friend='$_COOKIE[username]' AND username NOT IN (SELECT friend FROM friend WHERE username='$_COOKIE[username]')";
$querry4=mysql_query($sql4)or die('Query failed: ' . mysql_error());

while($row4=mysql_fetch_array($querry4)){ 
?>
 <tr>
<td><a style="color:#0066FF;text-decoration: none; "
	href="friend2.php?user=<?=$row4[username]?>"><?=$row4[username];?></a></td>
</tr>
<?php 
}
?>
</table>
</div>
</div>
<div style="clear:both"></div>
<div style="margin:0 auto;width:1200px">
<div class="recent">
<label style="margin-top:50px;font-size:25px;font-weight:bold;color:#0066FF">Photo you posted recently</label>
<hr style="border: 1px dotted #ddd; width: 100%;margin-top:10px" />
<?php 
$sql2="select filedata from upload_picture where username='$_COOKIE[username]' order by date desc limit 2";
$querry2=mysql_query($sql2) or die('Querry failed:'.mysql_error());
while ($row2=mysql_fetch_array($querry2)){
?>
<div style="float:left;width:350px;height:250px">
<a href="picture.php?picture_name=<?=$row2[filedata]?>"><img  class="space" src="/picture/<?=$row2[filedata];?>"/></a>
</div>

<?php 
}
?>
</div>
</div>
<div style="clear:both;margin-top:450px">
<hr style="border: 1px dotted #ddd; width: 100% ;" />
<p align="center" style="margin-top:10px;">Copyright Gaotang Shen</p></div>
</body>
</html>
