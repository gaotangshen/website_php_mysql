<? ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=1036">
<!--<meta name="viewport" content="initial-scale=1.0, user-scalable=no"; charset="utf-8">-->
<style>
    
button.margin
{
margin-right:10px;
}
</style>
</head>

<?php
include 'head.php';
include 'conn.php';
	 if($_GET[out]){
  	setcookie("cookie", "out");
  	setcookie("username","");
    echo "<script language=\"javascript\">location.href='index.php';</script>";
  }

$sql="select username from member where username='$_POST[username]'";

	$querry=mysql_query($sql)or die('Query failed: ' . mysql_error());
	$row=mysql_fetch_array($querry);	
    if($_POST[username]==$row[username]){
    	
    $pw=md5($_POST[pw]);

    $sql1="select password from member where password='$pw'";
 	$querry=mysql_query($sql1)or die('Query failed: ' . mysql_error());   
 	$row1=mysql_fetch_array($querry);
    if($pw==$row1[password]){
     setcookie("cookie", "ok");
     setcookie("username","$_POST[username]");
     header("location:home.php");
	
    }
  }
  else {
  	echo "<script language=\"javascript\">alert('username not exist');</script>";
  }

//include("head.php");
if($_COOKIE['cookie']!='ok'){
?>

<SCRIPT  type="text/javascript">
function Checklogin()
{
	if (myform.id.value=="")
	{
		alert("username");
		myform.id.focus();
		return false;
	}
		if (myform.pw.value=="")
	{
		alert("Password");
		myform.pw.focus();
		return false;
	}
}
//function signup() 
//{ 
//document.myform.action="signup.php"; 
//document.myform.submit(); 
//} 


</SCRIPT>
<div style="margin:0 auto;width:1400px">
<div style="margin-left:100px; margin-top:100px;float:left">
<form action="" method="post" name="myform" onsubmit="return Checklogin();">
 <table align="center">
 <tr>
  <td align="right" height=50> <label style="color:#C71585">Username:</label></td><td><input  type="text" name="username" /></td>
  </tr>
  <tr>
  <td align="right" height=50><label style="color:#C71585">Password:</label></td><td><input type="password" name="pw"/></td>
  </tr>
  <tr>
  <td height=50> </td><td align="center"><input  type="submit" name="log in" value="log in"/></td>
</tr> 
<!--  <tr>-->
<!--  <td height=50><label style="color:#C71585">Don't have an account?</label></td> <td align="center"> <button class="margin" type="button" onclick="signup()">sign up</button></td>-->
<!-- <input class="margin" type="submit" name="sign up" value="sign up"/>-->
<!-- </tr>-->
 </table>
  </form>
 </div>
 <DIV align="center" style=" WIDTH:750px; HEIGHT: 500px ;margin-right:2cm;float:right;margin-top:1cm">
 <label style="align:center;color:#000000;font-size:40px"><b>Share your life in photos</b></label><br><br><input style="font-weight:bolder;font-size:30px;color:#C71585;width:6cm;height:1.5cm" type="button" value="Sign up now"onclick="window.location.href=('signup.php')">
 	
 	 <div class="content-wrapper"> 
			<div class="content"> 
				
					
				
				
			  
					
					
					
						<div class="homepage-slider"> 
						
							<a href="#" class="btn-previous" onmouseover="set_hover_on();" onmouseout="set_hover_off();" onclick="scrollLefty(); return false;">&nbsp;</a> 
							<a href="#" class="btn-next" onmouseover="set_hover_on();" onmouseout="set_hover_off();" onclick="scrollRight(); return false;">&nbsp;</a> 
						
						
						
							<div id="aktuals_field" style="overflow:hidden; position:relative;width:750px;"> 
								<table> 
									<tr> 
									
										<td> 
											
											<div class="homepage-slider-item" id="aktuals1" style="background: url(images/city.jpg) 0 0 no-repeat;"> 
													
	
										
											</div> 
										</td> 
										
										<td> 
										
											<div class="homepage-slider-item" id="aktuals2" style="background: url(images/Koala.jpg) 0 0 no-repeat;"> 
													
	 
											
											</div> 
										</td> 
										
										<td> 
										
											<div class="homepage-slider-item" id="aktuals3" style="background: url(images/Lighthouse.jpg) 0 0 no-repeat;"> 
													
	
											<!-- END .homepage-slider-item --> 
											</div> 
										</td> 
										
										<td> 
											<!-- BEGIN .homepage-slider-item --> 
											<div class="homepage-slider-item" id="aktuals4" style="background: url(images/Penguins.jpg) 0 0 no-repeat;"> 
													
	
											<!-- END .homepage-slider-item --> 
											</div> 
										</td> 
										
										<td> 
											<!-- BEGIN .homepage-slider-item --> 
											<div class="homepage-slider-item" id="aktuals5" style="background: url(images/Desert.jpg) 0 0 no-repeat;"> 
													
	
											<!-- END .homepage-slider-item --> 
											</div> 
										</td> 
 
									</tr> 
								</table> 
							</div> 
							
							<!-- BEGIN .homepage-slider-image-shadow --> 
							<div class="homepage-slider-image-shadow"> 
								&nbsp;
							<!-- END .homepage-slider-image-shadow --> 
							</div> 
							
							
							<!-- BEGIN .navigation --> 
							<div class="navigation"> 
								<a href="#" id="aktuals1_btn" onclick="scrollToElem(1); return false;" class="active"></a> 
								<a href="#" id="aktuals2_btn" onclick="scrollToElem(2); return false;"></a> 
								<a href="#" id="aktuals3_btn" onclick="scrollToElem(3); return false;"></a> 
								<a href="#" id="aktuals4_btn" onclick="scrollToElem(4); return false;"></a> 
								<a href="#" id="aktuals5_btn" onclick="scrollToElem(5); return false;"></a> 
							<!-- END .navigation --> 
							</div> 
 
						<!-- END .homepage-slider --> 
						</div> 
						
					
					</div> 
 
 
				<!-- END .content --> 
				</div> 
				
			
			</div>
 
 
 </DIV> 


<?
}
?>
</html>
<? ob_flush(); ?>