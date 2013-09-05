<!doctype html>
<html>
<head>
<style>
.space{
height:250px;
width:320px;
}
.contain {
	height: 800px;
	width: 1200px;
	padding:30px 0px;
	margin-left:70px;
	
}
.inner_contain{
align:center;
	height: 300px;
	float:left;
	width: 320px;
	margin:0px 10px 0px 55px;
}
.inner_inner{
text-align:center;
	height:40px;
	width:200px;
	margin-left:50px;
}
</style>
</head>
<body>
<?php
include 'head.php';
include 'conn.php';
?>
<div style="margin:0 auto;width:1300px">
<div class="contain">
<?php 
$tag=$_GET[search];
$sql1="insert into search(id,username,searchtag,searchdate) " .
  		"values ('','$_COOKIE[username]','$tag',now())";
		mysql_query($sql1)or die('Query failed: ' . mysql_error());
$i=0;
$sql="SELECT * FROM upload_picture WHERE tag LIKE '%$tag%' OR tagaddition  LIKE '%$tag%' or username='$tag'";
$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
while($row=mysql_fetch_array($querry)){ 
//	if($i<3){
		
		$array[$i]=$row[username];
		
?>
<div class="inner_contain">
<a href="picture.php?picture_name=<?=$row[filedata]?>"><img  class="space" src="/picture/<?=$row[filedata]?>"/></a>
<div class="inner_inner">
<label style="color:#191970">From</label>&nbsp;&nbsp;
<a style="color:#0066FF;text-decoration: none; "
	href="friend3.php?user=<?=$array[$i]?>"><?=$array[$i];?></a>

</div>
</div>

<?php 
// $i=$i+1;
}
//else{
?>

<!--<div style="height:350px;width:1200px;margin-left:135px;clear:both">-->
<!--<img  class="space" src="/picture/<?//=$row[filedata]?>"/>-->
<?php
//$i=0;
//}
?>
<?php
//}
?>
</div>
</div>
</body>
</html>
