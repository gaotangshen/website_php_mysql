<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>�ɿ��Ʒ����ͼƬѭ������Ч��</title>
<meta http-equiv="content-type" content="text/html;charset=gb2312">
<!--���������ӵ�<head>��</head>֮��-->
<style type="text/css">
*{margin:0;padding:0;}
#box{border:1px #ccc solid;width:600px;height:200px;overflow:hidden;margin:100px auto 0;}
#div{width:2400px;}
#img,#img1{list-style:none;width:1200px;float:left;}
ul li{float:left;}
#but{width:600px;height:30px;margin:0 auto;}
#a{float:left;}
#b{float:right;}
#but input{width:80px;height:30px;font-size:22px;font-weight:bold;}
</style>
</head>
<body>
<!--���������ӵ�<body>��</body>֮��-->
<div id="box">
	<div id="div">
		<ul id="img">
    		<li><img src="\picture\20121226202307bat.jpg"></li>
       	 	<li><img src="\picture\20121226204621bike.jpg"></li>
        	<li><img src="\Picture\20121226204630autumn.jpg"></li>
       		<li><img  src="\Picture\20130612193220Hydrangeas.jpg"></li>
            <li><img  src="/get_pic/2011/05/2011121201033672.png"></li>
       		<li><img  src="/get_pic/2011/05/20111212010342197.png"></li>
   		</ul>
    	<ul id="img1">
    	</ul>
    </div>
</div>
<div id="but">
	<div id="a"><input type="button" id="but1" value="����"></div>
    <div id="b"><input type="button" id="but2" value="����"></div>
</div>
<script type="text/javascript">
var getBox=document.getElementById('box');//��ʾͼƬ��div
var img=document.getElementById('img');//��һ��ͼƬ��ul
var img1=document.getElementById('img1');//�ڶ���ͼƬ��ul
var but1=document.getElementById('but1');//��ఴť
var but2=document.getElementById('but2');//�Ҳఴť
img1.innerHTML=img.innerHTML;
getBox.scrollLeft=0;
var scrollTime=2000,quickScroll=1,scrollGap=3000;
var count=0;
var auto=setTimeout(scrollAuto,scrollTime);//ͼƬ�Զ���������
/*ͼƬ�Զ���������*/
function scrollAuto(){
	if(getBox.scrollLeft>=img1.offsetWidth){
		getBox.scrollLeft=0;
	}else{
		getBox.scrollLeft++;	
	}
	count=getBox.scrollLeft%200;
	if(count==0&&getBox.scrollLeft>0){
		auto=setTimeout(scrollAuto,scrollGap);	
	}else{
		auto=setTimeout(scrollAuto,quickScroll)	
	}
}
/*ͼƬ�����������*/
function scrollLeft(){
	if(getBox.scrollLeft>=img1.offsetWidth){
		getBox.scrollLeft=0;
	}else{
		getBox.scrollLeft++;	
	}
	count=getBox.scrollLeft%200;
 	turnLeft=setTimeout(scrollLeft,quickScroll);
	if(count==0){
		clearTimeout(turnLeft);
	}
}
/*ͼƬ���ҹ�������*/
function scrollRight(){
	if(getBox.scrollLeft<=0){
		getBox.scrollLeft=img.scrollWidth;
	}else{
		getBox.scrollLeft--;	
	}
	count=getBox.scrollLeft%200;
	turnRight=setTimeout(scrollRight,quickScroll);
	if(count==0){
		clearTimeout(turnRight);
	}
	
}
/*�Զ�����ֹͣ����*/
function stopAuto(){
	clearTimeout(auto);
}
/*�Զ�������ʼ����*/
function beginAuto(){
	auto=setTimeout(scrollAuto,scrollTime);	
}
/*�������ư�ť������ʼ����*/
function clickLeft(){
	turnLeft=setTimeout(scrollLeft,quickScroll);
	if(getBox.scrollLeft>=img.offsetWidth){
		getBox.scrollLeft=0;
	}
}
/*�������ư�ť������ʼ����*/
function clickRight(){
	turnRight=setTimeout(scrollRight,quickScroll);
	if(getBox.scrollLeft<=0){
		getBox.scrollLeft=img.offsetWidth;
	}
}
but1.onclick=clickLeft;
but2.onclick=clickRight;
getBox.onmouseover=stopAuto;
getBox.onmouseout=beginAuto;
but1.onmouseover=stopAuto;
but1.onmouseout=beginAuto;
but2.onmouseover=stopAuto;
but2.onmouseout=beginAuto;
</script>
</body>
</html></td>
	  </tr>
	</table>