<!DOCTYPE html>
<html>
<head>
<style>
label.color{
	color:#ff0000;
}
#header{background-image:url(../city.jpg);}
</style>
</head>

<body>
<?php include 'head.php';?>

<?php
include("conn.php");
if($_POST['username']){
	$sql="select username from member where username='$_POST[username]'";
	$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
	$row=mysql_fetch_array($querry);
	if($row[username]){echo "<script language=\"javascript\">alert('invalid username');location.href='signup.php';</script>";}
	else{
		$password=md5($_POST[password]);
		$sql="insert into member(id,username,password,email,lastdate) " .
  		"values ('','$_POST[username]','$password','$_POST[email]',now())";
		mysql_query($sql)or die('Query failed: ' . mysql_error());;
		echo "<script language=\"javascript\">alert('success');location.href='index.php'</script>";}
		//header("Location: ");
}
?>
<SCRIPT type="text/javascript">
function CheckSign()
{
	if (myform2.username.value=="")
	{
		alert("username");
		myform2.username.focus();
		return false;
	}
	if (myform2.password.value.length<5)
	{
		alert("password need more than 5 character");
		myform2.password.focus();
		return false;
	}
	if (myform2.password.value!=myform2.repw.value)
	{
		alert("Please write down the same password");
		myform2.password.focus();
		return false;
	}
	if (myform2.email.value.charAt(0)=="." || myform2.email.value.charAt(0)=="@" 
		|| myform2.email.value.indexOf('@',0)==-1 ||myform2.email.value.indexOf('.',0)==-1 
		|| myform2.email.value.lastIndexOf("@")==myform2.email.value.length-1 
		|| myform2.email.value.lastIndexOf(".")==myform2.email.value.length-1)
	{
		alert("No valid e-mail address!");
    	myform2.email.focus();
    	return false;
	}
	//alert(document.getElementById("myform1"));
	document.forms["myform3"].submit();
}
</SCRIPT> 
<div style="margin:0 auto;width:1400px">
 <div style="margin-left:100px; margin-top:100px;float:left">
<form id="myform3" action="signup.php" method="post" name="myform2">
 <table align="center">
 <tr>
<td align="right" height=50> <label style="color:#C71585">Username:</label></td><td><input	type="text" size="20" name="username" /><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td align="right" height=50> <label style="color:#C71585">Password:</label></td><td><input type="password" size="20" name="password" /><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td align="right" height=50> <label style="color:#C71585">Re-enter Password:</label></td><td><input type="password" size="20" name="repw" /><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td align="right" height=50> <label style="color:#C71585">Email</label></td><td><input type="text" size="25" name="email" /><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td height=50></td><td align="center"><input type="button" value="submit" onclick="CheckSign()" /></td>
</tr>
</table>
</form>
</div>
<DIV align="center"id="header" style=" WIDTH:750px; HEIGHT: 500px ;margin-right:2cm;float:right;margin-top:1cm"><label style="align:center;color:#ffffff;font-size:40px"><b>Share your life in photos</b></label></DIV>
<!--<div style="height:500px ; float:right; margin-right:2cm"id="header">-->
<!---->
<!--</div>-->
</div>
</body>
</html>