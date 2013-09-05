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
div.recent{
	margin-top:50px;
	margin-left:100px;
	width:700px;
	height:350px;
}
</style>
</head>
<body>
<div style="margin:0 auto;width:1400px">
<div class="recent">
<label style="font-size:25px;font-weight:bold;color:#0066FF">Photos you may interested</label>
<hr style="border: 1px dotted #ddd; width: 100%;margin-top:10px" />
<?php 
$sql=" SELECT * FROM search  JOIN upload_picture USING(username)  WHERE username='$_COOKIE[username]'and tag = searchtag group by filedata ";
$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
while($row=mysql_fetch_array($querry)){
//	$sql1="SELECT * FROM search  JOIN upload_picture USING(username) WHERE username='$_COOKIE[username]' and (tag LIKE '%$row[searchtag]%' OR tagaddition  LIKE '%$row[searchtag]%' or username like '%$row[searchtag]%'or tag = searchtag)  order by date limit 4 ";
//	$querry1=mysql_query($sql1)or die('Query failed: ' . mysql_error());
//	$row1=mysql_fetch_array($querry1);
?>
<div style="float:left;width:350px;height:250px">

<a href="picture.php?picture_name=<?=$row[filedata]?>"><img  class="space" src="/picture/<?=$row[filedata]?>"/></a>
</div>
<?php 
	
}
?>
</div>
</div>
</body>
</html>