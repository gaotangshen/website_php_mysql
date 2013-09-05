<!DOCTYPE html>
<html>
<head>
<?php
include("head.php");
include("conn.php");
?>
</head>
<body>
<?php
//if(!empty($_POST["tag"])){  
//	$array = $_POST["tag"]; 
//	 $size = count($array);  
//	 for($i=0; $i< $size; $i++){  
//	 	echo $array[$i];  
//	 }  
//}  
if (is_uploaded_file($_FILES['doc']['tmp_name'])){
	
$upfile=$_FILES["doc"];
$name = date("YmdHis").$upfile["name"];
$type = $upfile["type"];
$size = $upfile["size"];
$tmp_name = $upfile["tmp_name"];
$error = $upfile["error"];
switch ($type) {
	case 'image/pjpeg' : $ok=1;
		break;
	case 'image/jpeg' : $ok=1;
		break;
	case 'image/gif' : $ok=1;
		break;
	case 'image/png' : $ok=1;
		break;
}
if($ok && $error=='0'&&$_COOKIE[username]){
	if($_POST[tag]){
	$value=$_POST[tag];
 	$tag=implode(',',$value);
 	move_uploaded_file($tmp_name,'C:\Users\shen\php\picture/'.$name);
 $sql="insert into upload_picture(id,username,tag,tagaddition,comment,filedata,date) " .
  		"values ('','$_COOKIE[username]','$tag','$_POST[tagaddition]','$_POST[comment]','$name',now())";
		mysql_query($sql)or die('Query failed: ' . mysql_error());;
echo "<script language=\"javascript\">alert('success');</script>";
}
else{
	echo "<script language=\"javascript\">alert('add your tag');</script>";
}
}
}
?>
<div style="margin:0 auto;width:1400px">
<form  name="myform" enctype="multipart/form-data" method="post" action="#">

<div style="margin-left:150px; margin-top:0px;float:left">
<table width=500 height=500 border="0" cellpadding="5" cellspacing="1" bgcolor=>
	<tr>
	<td id="localImag" width=500px height="490px" ><img id="preview" width=-1 height=-1	style="diplay: none" /></td>
	</tr>
	<tr>
	<td align="center"><input type=file name="doc" id="doc" onchange="javascript:setImagePreview();"><label style="color:#C71585">select picture</label></td>
	</tr>
</table>
</div>
<div style="margin-left:500px;width:auto ;text-align:center">
<h1 style="color:#C71585;font-size:20px ;margin-right:410px;margin-top:20px"> Select your tag:</h1>
<table width=500 border="0" cellpadding="5" cellspacing="1" bgcolor="" >
<!--<tr>-->
<!--<td style="color:#C71585;font-size:20px ;margin-left:10px"> select your tag:</td>-->
<!--</tr>-->
<tr>
<td width=200></td><td align="left"><input type="checkbox" name="tag[]" value="people"><label>people</label>   </td>
</tr>
<tr>
<td width=200></td><td align="left"><input type="checkbox" name="tag[]" value="city"><label>city</label>   </td>
</tr>
<tr>
<td width=200></td><td align="left"><input type="checkbox" name="tag[]" value="nature"><label>nature</label>   </td>
</tr>
<tr>
<td width=200></td><td align="left"><input type="checkbox" name="tag[]" value=" iphoneography"><label> iphoneography</label>   </td>
</tr>
<tr>
<td width=200></td><td align="left"><input type="checkbox" name="tag[]" value="trip"><label>trip</label>   </td>
</tr>
<tr>
<td width=200></td><td align="left"><input type="checkbox" name="tag[]" value="food"><label>food</label>   </td>
</tr>
<tr>
<td width=200></td><td align="left"><input type="checkbox" name="tag[]" value="friend"><label>friend</label>   </td>
</tr>
<tr>
<td width=200></td><td align="left"><input type="checkbox" name="tag[]" value="festival"><label>festival</label>   </td>
</tr>
<tr>
<td width=200 align="right"><label style="color:#C71585">Add your own tag:</label></td><td align="left"><input type="text" name="tagaddition" size="39"/></td>
</tr>
<tr>
<td width=200 align="right"><label style="color:#C71585">Comment:</label></td><td align="left"><textarea  name="comment" cols="33.5" rows="9"></textarea></td>
</tr>
<tr>
</tr>
<tr >
<td></td><td> <input type="submit" name="submit" value="upload"/></td>
</tr>
</table>
</div>
</form>
</div>
<script>
 function setImagePreview() {
     var docObj=document.getElementById("doc");
     var fileName = docObj.value;
     var imgObjPreview=document.getElementById("preview");
         if(docObj.files &&  docObj.files[0]){
             
             imgObjPreview.style.display = 'block';
             imgObjPreview.style.width = '450px';
             imgObjPreview.style.height = '450px';           
             imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
         }else{
            
             docObj.select();
             var imgSrc = document.selection.createRange().text;
             var localImagId = document.getElementById("localImag");
             
             localImagId.style.width = "400px";
             localImagId.style.height = "400px";
             
             try{
                 localImagId.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                 localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
             }catch(e){
                 alert("wrong type");
                 return false;
             }
             imgObjPreview.style.display = 'none';
             document.selection.empty();
         }
         return true;
     }
 </script>
</body>
</html>