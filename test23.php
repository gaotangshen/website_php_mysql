<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>JS+CSS控制左右切换鼠标可控的无缝图片滚动代码 - www.webdm.cn</title>
<style type="text/css">
<!--
.rollBox{width:704px;overflow:hidden;padding:12px 0 5px 6px;}
.rollBox .LeftBotton{height:52px;width:19px;background:url(http://www.webdm.cn/images/20091006/job_mj_069.gif) no-repeat 

11px 0;overflow:hidden;float:left;display:inline;margin:25px 0 0 0;cursor:pointer;}
.rollBox .RightBotton{height:52px;width:20px;background:url(http://www.webdm.cn/images/20091006/job_mj_069.gif) no-repeat 

-8px 0;overflow:hidden;float:left;display:inline;margin:25px 0 0 0;cursor:pointer;}
.rollBox .Cont{width:530px;overflow:hidden;float:left;}
.rollBox .ScrCont{width:10000000px;}
.rollBox .Cont .pic{width:132px;float:left;text-align:center;}
.rollBox .Cont .pic img{padding:4px;background:#fff;border:1px solid #ccc;display:block;margin:0 auto;}
.rollBox .Cont .pic p{line-height:26px;color:#505050;}
.rollBox .Cont a:link,.rollBox .Cont a:visited{color:#626466;text-decoration:none;}
.rollBox .Cont a:hover{color:#f00;text-decoration:underline;}
.rollBox #List1,.rollBox #List2{float:left;}
-->
</style>
</head>
<body>
<div class="rollBox">
     <div class="LeftBotton" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"></div>
     <div class="Cont" id="ISL_Cont">
      <div class="ScrCont">
       <div id="List1">
       
        <!-- 图片列表 begin -->
         <div class="pic">
          <a href="/" target="_blank"><img src="http://www.webdm.cn/images/wall1_s.jpg" width="109" height="87" /></a>
          <p><a href="#" target="_blank">风景美如画</a></p>
         </div>       
        
 <div class="pic">
          <a href="/" target="_blank"><img src="http://www.webdm.cn/images/wall2_s.jpg" width="109" height="87"/></a>
          <p><a href="#" target="_blank">我爱源码爱好者</a></p>
         </div>
         <div class="pic">
          <a href="/" target="_blank"><img src="http://www.webdm.cn/images/wall3_s.jpg" width="109" height="87" /></a>
          <p><a href="#" target="_blank">学习型源码站</a></p>
         </div>
         <div class="pic">
          <a href="/" target="_blank"><img src="http://www.webdm.cn/images/wall4_s.jpg" width="109" height="87" /></a>
          <p><a href="#" target="_blank">每一款都测试</a></p>
         </div>
         <div class="pic">
          <a href="/" target="_blank"><img src="http://www.webdm.cn/images/wall5_s.jpg" width="109" height="87" alt="你难

道不喜欢" /></a>
          <p><a href="#" target="_blank">你难道不喜欢</a></p>
         </div>
 <div class="pic">
          <a href="/" target="_blank"><img src="http://www.webdm.cn/images/wall6_s.jpg" width="109" height="87" /></a>
          <p><a href="#" target="_blank">你太令我失望了</a></p>
         </div>      
         <div class="pic">
          <a href="/" target="_blank"><img src="http://www.webdm.cn/images/wall7_s.jpg" width="109" height="87" /></a>
          <p><a href="#" target="_blank">今天早点睡</a></p>
         </div>
        <!-- 图片列表 end -->
        
       </div>
       <div id="List2"></div>
      </div>
     </div>
     <div class="RightBotton" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"></div>
    </div>
   </div>

<script language="javascript" type="text/javascript">
<!--//--><![CDATA[//><!--
//图片滚动列表 mengjia 070816
var Speed = 1; //速度(毫秒)
var Space = 5; //每次移动(px)
var PageWidth = 528; //翻页宽度
var fill = 0; //整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2").innerHTML = GetObj("List1").innerHTML;
GetObj('ISL_Cont').scrollLeft = fill;
GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
GetObj("ISL_Cont").onmouseout = function(){AutoPlay();}
AutoPlay();
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return 

eval('document.all.'+objName)}}
function AutoPlay(){ //自动滚动
 clearInterval(AutoPlayObj);
 AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',3000); //间隔时间
}
function ISL_GoUp(){ //上翻开始
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
}
function ISL_StopUp(){ //上翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
  Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
  CompScr();
 }else{
  MoveLock = false;
 }
 AutoPlay();
}
function ISL_ScrUp(){ //上翻动作
 if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj

('List1').offsetWidth}
 GetObj('ISL_Cont').scrollLeft -= Space ;
}
function ISL_GoDown(){ //下翻
 clearInterval(MoveTimeObj);
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 ISL_ScrDown();
 MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
}
function ISL_StopDown(){ //下翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
  Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
  CompScr();
 }else{
  MoveLock = false;
 }
 AutoPlay();
}
function ISL_ScrDown(){ //下翻动作
 if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft = GetObj

('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
 GetObj('ISL_Cont').scrollLeft += Space ;
}
function CompScr(){
 var num;
 if(Comp == 0){MoveLock = false;return;}
 if(Comp < 0){ //上翻
if(Comp < -Space){
   Comp += Space;
   num = Space;
  }else{
   num = -Comp;
   Comp = 0;
  }
  GetObj('ISL_Cont').scrollLeft -= num;
  setTimeout('CompScr()',Speed);
 }else{ //下翻
if(Comp > Space){
   Comp -= Space;
   num = Space;
  }else{
   num = Comp;
   Comp = 0;
  }
  GetObj('ISL_Cont').scrollLeft += num;
  setTimeout('CompScr()',Speed);
 }
}
//--><!]]>
</script>
</body>
</html>
<br />
<p><a href="http://www.webdm.cn">网页代码站</a> - 最专业的网页代码下载网站 - 致力为中国站长提供有质量的网页代码！</p>
复制代码