<!DOCTYPE html>
<html>
<head>
<?php  ?>
<style type="text/css">
div#container {
	width: 800px
}

div#header {
	
}

/*div#menu {
	background-color:#FFA500;
    height: 1000px;
	width: 200px;
	float: left;
}
*/
div#content {
		background-color: #99bbbb;
	height: 600px;
	width: 800px;
	
}

div#footer {
	background-color: #99bbbb;
	clear: both;
	text-align: center;
}
label.color{
	color:#ff0000;
}
h1 {
	margin-right:300px;
	margin-bottom:30px;
}
td.margin{
	font-size:19px;
	color:#FF00CC;
	
}
h2 {
	margin-bottom: 0;
	font-size: 18px;
}

ul {
	margin: 0;
}

li {
	list-style: none;
}
</style>
</head>

<body>

<div align="center">
<div id="container">

<div id="header">
<h1>Edit your profile</h1>
</div>

<!-- <div id="menu"> -->
<!--<h2>Menu</h2>-->
<!--<ul>-->
<!--	<li>HTML</li>-->
<!--	<li>CSS</li>-->
<!--	<li>JavaScript</li>-->
<!--</ul>-->
<!--</div>-->

<div id="content">
<form id="myform1" action="signup.php" method="post" name="myform">
<table id= "2" width=500 border="0" align="right" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<tr>
<td class="margin">Basic Bits</td>
</tr>
<tr>
<td align="right">First Name:</td><td><input	type="text" size="20" name="firstname" /><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td align="right">Last Name:</td><td><input	type="text" size="20" name="lastname" /><label class="color">&nbsp;*</label></td>
</tr>
<tr>
<td align="right">Gender:</td><td><input type="radio"  name="gender" id="r1"/><label for="r1">male</label>
<input	type="radio"  name="gender" id="r1"/><label for="r2">female</label>
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
<td></td><td width="300" align="center"><input type="button" value="submit" onclick="CheckSign()" />
 <input name="reset" type="reset" id="reset" value="Reset" /></td> 
</tr>
</table>
</form>

</div>

<div id="footer">Copyright Gaotang Shen</div>
<div style="clear: both"></div>
</div>
</div>
</body>
</html>
