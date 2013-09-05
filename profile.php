<!DOCTYPE html>
<html>
<head>
<?php include 'head.php';?>

<style type="text/css">
div#container {
	align:"center";
	width: 800px
}
div#content {
	background-color: #99bbbb;
	height: 600px;
	width: 800px;	
}
label.color{
	color:#ff0000;
}
h1 {
	margin-left:300px;
	margin-bottom:30px;
}
td.margin{
	font-size:19px;
	color:#FF00CC;
}
</style>
<?php
include("conn.php");
if($_POST['firstname']){
	$sql="select firstname from profile where firstname='$_POST[firstname]'";
	$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
	$row=mysql_fetch_array($querry);
	if($row[firstname]){echo "<script language=\"javascript\">alert('invalid firstname');location.href='profile.php';</script>";}
	else{
		$sql="insert into profile(id,username,firstname,lastname,gender,email,address,country,lastdate) " .
  		"values ('','$_COOKIE[username]','$_POST[firstname]','$_POST[lastname]','$_POST[gender]','$_POST[email]','$_POST[address]','$_POST[country]',now())";
		mysql_query($sql);
		echo "<script language=\"javascript\">alert('success');</script>";}
		//header("Location: ");
}
?>
</head>
<body>
<SCRIPT  type="text/javascript">
function CheckSubmit()
{
	if (myform9.firstname.value=="")
	{
		alert("First Name");
		myform9.firstname.focus();
		return false;
	}
		if (myform9.lastname.value=="")
	{
		alert("Last Name");
		myform9.lastname.focus();
		return false;
	}
		if (myform9.email.value.charAt(0)=="." || myform9.email.value.charAt(0)=="@" 
			|| myform9.email.value.indexOf('@',0)==-1 ||myform9.email.value.indexOf('.',0)==-1 
			|| myform9.email.value.lastIndexOf("@")==myform9.email.value.length-1 
			|| myform9.email.value.lastIndexOf(".")==myform9.email.value.length-1)
		{
			alert("No valid e-mail address!");
	    	myform9.email.focus();
	    	return false;
		}
		
		document.forms["myform8"].submit();
}
//function profile() 
//{ 
//document.myform.action="profile.php"; 
//document.myform.submit(); 
//} 
</SCRIPT>
<div style="margin:0 auto; width:1400px">
<!--<div align="center">-->
<!--<div id="container">-->
<h1>Edit your profile</h1>
<!--<div id="content">-->
<form id="myform8" action="profile.php" method="post" name="myform9">
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" >
<tr>
<td class="margin">Basic Bits</td>
</tr>
<tr>
<td align="right">First Name:</td><td><input type="text" size="20" name="firstname" /><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td align="right">Last Name:</td><td><input	type="text" size="20" name="lastname" /><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td align="right">Gender:</td><td><input type="radio"  name="gender" value="male"id="r1"/><label for="r1">male</label>
<input	type="radio"  name="gender" value="female"id="r1"/><label for="r2">female</label>
</td>
</tr>
<tr>
<td align="right">Email:</td><td><input type="text" size="20" name="email"/><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td class="margin">Offline bits</td><td></td>
</tr>
<tr>
<td align="right">Address:</td><td><input type="text" size="30" name="address"/></td>
</tr>
<tr>
<td align="right">Country:</td><td><input type="text" size="20" name="country"/></td>
</tr>
<tr>
<td></td><td width="300" align="center"><input type="button" value="submit" onclick="CheckSubmit()" />
 <input name="reset" type="reset" id="reset" value="Reset" /></td> 
</tr>
</table>
</form>
<!--</div>-->
<p align="center" style="margin-top:150px">Copyright Gaotang Shen</p>
<!--</div>-->
<!--</div>-->
</div>
</body>
</html>
