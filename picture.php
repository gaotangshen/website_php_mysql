<? ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php
include 'head.php';
include 'conn.php';
?>
<style type="text/css">
#aaa a:link {
	COLOR: gray;
	TEXT-DECORATION: none;
}

#aaa a:visited {
	COLOR: gray;
	TEXT-DECORATION: none;
}

#aaa a:active {
	COLOR: blue;
	TEXT-DECORATION: underline;
}

#aaa a:hover {
	COLOR: blue;
	TEXT-DECORATION: none;
}

.content {
	height: 500px;
	width: 400px;
	margin-top: 1cm;
	margin-left: 50px;
	float: left;
}

.image {
	height: 400px;
	width: 600px;
}

.picture {
	float: left;
	height: 500px;
	width: 600px;
	margin-top: 1cm;
	margin-left: 100px;
}

.comment {
	margin-left: 100px;
	clear: both;
	width: 600px;
}
</style>
</head>
<body>
<div style="margin: 0 auto; width: 1600px"><?php
$filename=$_GET[picture_name];
$sql="SELECT * FROM upload_picture WHERE filedata='$filename'";
$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
$row=mysql_fetch_array($querry);
?> <script type='text/javascript'>
function showHidden(){
	var dis=document.getElementById('id');
	if(dis.style.display=='none'){
		document.getElementById('a');dis.style.display="";
		}
	else{
		document.getElementById('a');dis.style.display="none";
		}
	
	}
function KeyAgnet() 
{	
var t=document.getElementById('typein').value;
document.cookie="tag="+t;
location.reload(true);
}
function change(value){
var p=document.getElementById("point").value=value;
document.cookie="point="+p;	
location.reload(true);
}
function CheckPost()
{
	if (myform0.comment.value=="")
	{
		alert("comment");
		myform0.comment.focus();
		return false;
	}
//	alert(document.getElementById("myform1"));
	document.forms["myform1"].submit();
	//window.opener.window.document.myform0(0).submit();
}
</script>
<div class="picture"><img class="image" src="/picture/<?=$filename?>" />
<h3 style="height: 10px">rate:</h3>
<form><label style="color: gray">1 point</label><input id="point"
	type="radio" name="point" value="1" id="r1"
	onclick="change(this.value)" /> <label style="color: gray">2 point</label><input
	id="point" type="radio" name="point" value="2" id="r1"
	onclick="change(this.value)" /> <label style="color: gray">3 point</label><input
	id="point" type="radio" name="point" value="3" id="r1"
	onclick="change(this.value)" /> <label style="color: gray">4 point</label><input
	id="point" type="radio" name="point" value="4" id="r1"
	onclick="change(this.value)" /> <label style="color: gray">5 point</label><input
	id="point" type="radio" name="point" value="5" id="r1"
	onclick="change(this.value)" /></form>
</div>
<?php
if($_COOKIE[point]){
	if($_COOKIE[username]){
		$sql="select username from rate where username='$_COOKIE[username]' and filedata='$filename'";
		$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
		$row=mysql_fetch_array($querry);
		if($row[username]){
			setcookie("point","");
			echo "<script language=\"javascript\">alert('you already rated');</script>";}
			else{
				$sql="insert into rate(id,username,filedata,rate,ratedate) " .
  		"values ('','$_COOKIE[username]','$filename','$_COOKIE[point]',now())";
				mysql_query($sql)or die('Query failed: ' . mysql_error());
				echo  "<script language=\"javascript\">alert('success');location.reload(true);</script>";
				setcookie("point","");
			}
	}
	else{	echo "<script language=\"javascript\">alert('you are not logged in');</script>";}
}
?>
<div class="content">
<div style="width: 400px;; height: 50px"><label
	style="margin-left: 50px; font-size: 14px">By</label>&nbsp;&nbsp; <?php 
	if($_COOKIE[username]<>$row[username]){
		?> <a style="color: #0066FF; text-decoration: none; font-size: 20px;"
	href="friend.php?user=<?=$row[username]?>"><?php echo $row[username];?></a>
		<?php
	}
	else{
		?> <a style="color: #0066FF; text-decoration: none; font-size: 20px;"
	href="home.php?user=<?=$row[username]?>"><?php echo $row[username];?></a>
		<?php
	}
	?>



<hr style="border: 1px dotted #ddd; width: 100%" />
</div>
<div id="aaa" style="width: 400px;; height: 100px; margin-top: 30px"><label
	style="margin-left: 50px; margin-top: 100px; font-size: 14px;">Tags</label>&nbsp;<a
	id="a" href='###' onclick="showHidden()">(add a tag)</a>
<hr style="border: 1px dotted #ddd; width: 100%" />
	<?php
	$a=$row[tag];
	$arr=explode(",",$a);
	?>
<ul>
<?php for($i=0;$i<count($arr);$i++){
	?>
	<li style="float: left; margin-left: 50px"><a
		href="search.php?search=<?=$arr[$i]?>"><?php echo $arr[$i];?></a></li>
		<?php }
		?>
	<li style="float: left; margin-left: 50px"><a
		href="search.php?search=<?=$row[tagaddition]?>"><?php echo $row[tagaddition];?></a></li>
</ul>
<div style="margin-top: 80px; width: 300px"><span
	style="display: none; margin-left: 80px" id='id'><input id="typein"
	type='text' name='tag' onkeydown="if(event.keyCode=='13') KeyAgnet()" /></span>

</div>
</div>
</div>
</div>
<div style="margin: 0 auto; width: 1600px">
<div class="comment"><?php 
//	setcookie("submit","submit");
if($_POST['comment']){
	if($_COOKIE[username]){
		$sql="insert into comments(id,username,filedata,comment,postdate) " .
  		"values ('','$_COOKIE[username]','$filename','$_POST[comment]',now())";
		mysql_query($sql);

		echo "<script language=\"javascript\">alert('success');</script>";
	}
	else{
		echo "<script language=\"javascript\">alert('you are not logged in');</script>";
	}
}
$sql="SELECT * FROM upload_picture WHERE filedata='$filename'";
$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
$row=mysql_fetch_array($querry);
?>
<form id="myform1" action="###" method="post" name="myform0">
<table width="600px">
	<tr>
		<td><label style="font-size: 20px">Comments</label></td>
	</tr>
	<tr style="height: 10px">
	</tr>
	<tr>
		<td><a style="color: #0066FF; text-decoration: none; font-size: 17px;"
			href="home.php?user=<?=$row[username]?>"><?php echo $row[username];?></a></td>
		<td><?=$row[date]?></td>
	</tr>
	<tr>
		<td><?=$row[comment]?></td>
	</tr>
	<?php
	$sql1="SELECT * FROM comments WHERE filedata='$filename'";
	$querry1=mysql_query($sql1)or die('Query failed: ' . mysql_error());

	while($row1=mysql_fetch_array($querry1)){
		?>
	<tr style="height: 50px">
	</tr>
	<tr>
		<td><a style="color: #0066FF; text-decoration: none; font-size: 17px;"
			href="home.php?user=<?=$row1[username]?>"><?php echo $row1[username];?></a></td>
		<td><?=$row1[postdate]?></td>
	</tr>
	<tr>
		<td><?=$row1[comment]?></td>
	</tr>
	<?php
	}
	?>

	<tr style="height: 50px">
	</tr>
	<tr>
		<td><textarea name="comment" cols="60" rows="9"> Add your comment ...</textarea></td>
	</tr>
	<tr>
		<td><input
			style="background-color: blue; height: 25px; color: #ffffff; vertical-align: center"
			type="button" value="submit" onclick="CheckPost()" /></td>
	</tr>
</table>
</form>
</div>
</div>
	<?php
	if($_COOKIE['tag']){
		$tag=$_COOKIE['tag'];
		$tag=",".$tag;
		$sql="SELECT * FROM upload_picture WHERE filedata='$filename'";
		$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
		$row=mysql_fetch_array($querry);
		$tag1=$row[tag].$tag;
		//echo $tag1;
		$sql1="UPDATE thumbtag.upload_picture SET tag ='$tag1' WHERE filedata='$row[filedata]';";
		mysql_query($sql1);
		echo  "<script language=\"javascript\">location.reload(true);</script>";
		setcookie("tag","");
		// echo "<script>";  echo  "window.location.href=window.location.href;";  echo "</script>";
	}


	?>
</body>
</html>
	<? ob_flush(); ?>