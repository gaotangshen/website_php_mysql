<!DOCTYPE html>
<html>
<head>
<?php 
include("head.php");
include 'conn.php';
?>
<style>
.space{
height:250px;
width:320px;
}
div.launch{
	margin-left:00px;
	margin-top:20px;
	height:100px;
	width:700px;
}
div.recent{
	margin-top:30px;
	margin-left:00px;
	width:700px;
	height:300px;
}
</style>
</head>
<body>

<div style="margin:0 auto;width:1200px">
<div class="launch">
<?php 
$another=$_GET[user];
if($_POST['friend']){
	$sql="delete from friend where username='$_COOKIE[username]'or friend='$_COOKIE[username]'";
	
	mysql_query($sql)or die('Querry failed:'.mysql_error());
	echo  "<script language=\"javascript\">alert('success');location.href='home.php'</script>";
}
?>
<label style="font-size:25px;font-weight:bold">Welcome </label><br>
<label style="font-size:22px;font-weight:bold">This is&nbsp;<?php echo $another;?>'s page</label><br>

<form  name="myform7" method="post" action=#>
<input type='submit' name='friend' value='unfriend'/><br>
</form>



</div>
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
<div class="recent">
<label style="margin-top:50px;font-size:25px;font-weight:bold;color:#0066FF">Photo he posted recently</label>
<hr style="border: 1px dotted #ddd; width: 100%;margin-top:10px" />
<?php 
$sql2="select filedata from upload_picture where username='$another' order by date desc limit 2";
$querry2=mysql_query($sql2) or die('Querry failed:'.mysql_error());
while ($row2=mysql_fetch_array($querry2)){
?>
<div style="float:left;width:350px;height:250px">

<a href="picture.php?picture_name=<?=$row2[filedata]?>"><img  class="space" src="/picture/<?=$row2[filedata]?>"/></a>
</div>

<?php 
}
?>
</div>
</div>
<hr style="border: 1px dotted #ddd; width: 100%;margin-top:140px" />
<p align="center" style="margin-top:10px">Copyright Gaotang Shen</p>
</body>
</html>