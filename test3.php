<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>JS鼠标点击控制圆点进度的图片滑动切换效果</title>
<style>
body { text-align: left; margin:0px; font-family:"宋体", "arial", sans-serif; font-size:12px;}
img { border:0px; }
.slide_box { zoom: 1; position: relative; width:981px; height:284px; }
.slide2 { overflow: hidden; width: 981px; height:284px; }
#slide3wrap_box { height: 134px }
#slide2wrap_box { height: 134px }
.slide2 .item { }
.slide2 .item img { width: 981px; height:284px; border:0px; }
.slide_btn2 .btn_prevon2 { background: url(prev1.png) no-repeat; float: left; width: 33px; cursor: pointer; height: 33px }
.slide_btn2 .btn_prevoff2 { background: url(prev2.png) no-repeat; float: left; width: 33px; cursor: pointer; height: 33px }
.slide_btn2 .btn_nexton2 { background: url(next1.png) no-repeat; float: left; width: 33px; cursor: pointer; height: 33px }
.slide_btn2 .btn_nextoff2 { background: url(next2.png) no-repeat; float: left; width: 33px; cursor: pointer; height: 33px }
.slide_btn2 { margin: 2px auto; width:240px; position: absolute; left: 382px; top: 247px; }
.clearfix:unknown {clear: both;display: block;visibility: hidden;height: 0px;content: "."}
.clearfix { zoom: 1; }
.slide_dot2 { float: left; margin: 5px 10px; width: 90px; }
.slide_dot2 span { background: url(point.png) no-repeat; float: left; margin: 0px 2px; overflow: hidden; cursor: pointer; }
.slide_dot2 .dot_list { width: 18px; height: 18px }
.slide_dot2 .current { background-position: -21px -0px }
</style>
</head>
<body>
<div class="slide_box">
  <div class="slide2" id="slide3">
    <div class="item"><img  title="" alt="" src="\picture\20121226202307bat.jpg"></div>
    <div class="item"><img  title="" alt="" src="\picture\20121226204621bike.jpg"></div>
    <div class="item"><img  title="" alt="" src="\Picture\20121226204630autumn.jpg"></div>
    <div class="item"><img  title="" alt="" src="\Picture\20130612193220Hydrangeas.jpg"></div>
  </div>
  <div class="slide_btn2 clearfix"> <span class="btn_prevoff2" id="btn_prev3" onmouseover="this.classname='btn_prevon2'" onmouseout="this.classname='btn_prevoff2'"></span>
    <div class="slide_dot2 clearfix" id="slide_dot3"></div>
    <span class=btn_nextoff2 id=btn_next3 onmouseover="this.classname='btn_nexton2'" onmouseout="this.classname='btn_nextoff2'"></span> </div>
</div>
<script type="text/javascript" src="headtech.js"></script>
<script>
var slide_03=new ScrollPic();
slide_03.id='slide3';//容器ID为必选参数
slide_03.prevId='btn_prev3';//按钮ID (上一个)
slide_03.nextId='btn_next3';//按钮ID (下一个)
//以下皆是可选参数
slide_03.moveNum=1;//每次滚动几个单元格 [默认1个]
slide_03.isLoop=true;//无缝循环滚动 [默认是]
//	slide_01.speed = 20;//速度 越小越快 [默认20]
slide_03.autoPlay=true;
slide_03.playTime = 4000;//自动播放时间间隔 [默认5秒]
slide_03.dotId='slide_dot3';//点列表容器ID [默认没点]
slide_03.dotEvent='mouseover';//点切换事件 [默认click]
//slide_01.dotType='number';//点类型 可以是数字或HTML代码 [默认空]
slide_03.dotClass='dot_list';//点className [默认dot_list]
slide_03.dotClassOn = 'current';//当前点 className [默认current]
slide_03.init();
</script>
</body>
</html></td>
	  </tr>
	</table>