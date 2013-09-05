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
<div class="contain">
<?php 
$tag=$_GET[search];
$i=0;
$sql="SELECT * FROM upload_picture WHERE tag LIKE '%$tag%' OR tagaddition  LIKE '%$tag%'";
$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
while($row=mysql_fetch_array($querry)){ 
//	if($i<3){
		
		$array[$i]=$row[username];
		
?>
<div class="inner_contain">
<img  class="space" src="/picture/<?=$row[filedata]?>"/>
<div class="inner_inner">
<label style="color:red">From</label>&nbsp;&nbsp;<?php echo $array[$i];?>
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
</body>
</html>
