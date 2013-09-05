<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
		
	
		<link id="main_stylesheet" rel="stylesheet" href="css/style.css" type="text/css" /> 
 

		
<script type="text/javascript" src="js/jquery.js"></script>
                     			<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                     			<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
     			<script type="text/javascript" src="js/aktuals.js"></script>
	
	<style>
div.head{margin:0 auto;width:1400px}
div.gray{ float:right;width:300px;margin-right:80px;margin-bottom:0.5cm;color:gray}
div.gray1{float:right;width:350px;margin-right:100px;margin-bottom:0.5cm;color:gray}
.space{
height:250px;
width:320px;
}
div.launch{

	
	margin:20px auto;
	height:100px;
	width:1000px;
}
div.recent{
	float:left;
	margin-top:30px;
	margin-left:100px;
	width:700px;
	height:300px;
}
</style>
	
	





<?php
$out;
if(isset($_COOKIE['username'])){?>

<div class="gray"><?php echo "welcome,"?><a style="text-decoration: none;color:#0066FF;"href='profile.php'><?=$_COOKIE[username]?></a>&nbsp;&nbsp;&nbsp;<a style="text-decoration: none;color:#0066FF;" href='index.php?out=login'>log out</a></div>
<div style="clear:both">
<form  action="search.php" method="get" name="myform">
<div style="margin:0 auto">
<table id = "1" width=85% align="center" cellpadding="2" cellspacing="1" bgcolor="#E6E6FA">
	<tr>
		<th width="100" style="font-size:14px"><a style="color:#191970;text-decoration:none" href="home.php">Home</a></th>
		<th width="100" style="font-size:14px"><a style="color:#191970;text-decoration:none" href="explore.php">Explore</a></th>
		<th width="100" style="font-size:14px"><a style="color:#191970;text-decoration:none" href="upload.php">Upload</a></th>
		<th align="right"><input type="text" name="search" /><input type="submit" name="submit" value="search"/></th>
	</tr>
</table>
</div>
</form>
</div>

<hr style="border:1px dotted #ddd; width: 85% " />

<!--<hr style="border:1px dotted #036" />-->
<?php 
}

else{?>

<div class="gray1"><?php echo "You aren't logged in,"?>&nbsp;&nbsp;&nbsp;<a style="text-decoration: none;color:#0066FF;" href='index.php'>log in</a>&nbsp;&nbsp;<a style="text-decoration: none;" href='signup.php'>sign up</a></div>
<div style="clear:both">
<form  action="search.php" method="get" name="myform">
<div style="margin:0 auto">
<table id = "1" width=85% align="center" cellpadding="2" cellspacing="1" bgcolor="#E6E6FA">
	<tr>
		<th width="100" style="font-size:14px"><a style="color:#191970;text-decoration:none" href="home.php">Home</a></th>
		<th width="100" style="font-size:14px"><a style="color:#191970;text-decoration:none" href="explore.php">Explore</a></th>
		<th width="100" style="font-size:14px"><a style="color:#191970;text-decoration:none" href="upload.php">Upload</a></th>
		<th align="right"><input type="text" name="search" /><input type="submit" name="submit" value="search"/></th>
	</tr>
</table>
</div>
</form>
</div>
<!--<hr style="border:1px dotted #ddd; width: 85% " />-->

<?php 
}

?>

