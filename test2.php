<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Imgmove</title>
<style type="text/css">
a{ background-color:#EFEBEF;width:100px; height:135px; display:inline-table; zoom:1; text-align:center;text-decoration:none;
border-left:1px solid #EFEBEF; border-right:1px solid #EFEBEF}
a.cc{background-color:#FFFFFF;width:100px; height:135px; display:inline-table; zoom:1; text-align:center;text-decoration:none; color:#000000; border-left:1px solid #CECBCE; border-right:1px solid #CECBCE}
a:hover{background-color:#FFFFFF;width:100px; height:135px; display:inline-table; zoom:1; text-align:center;text-decoration:none; color:#000000}
#container{
width:976px;
}
#container span{ display: block; margin-top:20px; margin-bottom:10px;}
#left{
width:29px;
height:137px;
float:left;
background-image:url("C:\Users\shen\Pictures\1.jpg");
background-position: -0px 0px;
}
#middle{
border-bottom:1px solid #CECBCE;
border-top:1px solid #CECBCE;
width:918px;
height:135px;
float:left;
background-color: #EFEBEF;
overflow:hidden;
}
#right{
width:29px;
height:137px;
float:left;
background-image:url("http://www.veryhuo.com/uploads/allimg/1107/232744390_p.jpg");
background-position: -29px 0px;
}
#thumblist{}
#middle img {
border:1px solid #999999;
}
</style>
</head>
<body style=" padding:10px; padding-top:150px; margin:0px; font-size:12px;">
<div id='nn' style=" text-align:center; font-size:16px; color:#0000FF">聚焦第5个</div>
<div id="container">
<div id="left"></div>
<div id="middle">
<div id="thumblist">
<a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p1.jpg"></span>郎朗</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p2.jpg"></span>田黎明</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p3.jpg"></span>蔡志忠（一）</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p4.jpg"></span>蔡志忠（二）</a></a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p5.jpg"></span>幾米</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p6.jpg"></span>闫博</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p7.jpg"></span>杨长槐</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p8.jpg"></span>张大力</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p9.jpg"></span>刘静兰</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p1.jpg"></span>哈亦琦</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p2.jpg"></span>邰立平</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p3.jpg"></span>孟树锋</a><a href="javascript:void(0)"><span><img src="/uploads/common/images/s_p4.jpg"></span>西合道</a>
</div>
</div>
<div id="right"></div>
</div>
<div style="clear:both; padding-top:20px;">
<input value='聚焦第1个' type="button" onclick="sss(1)" />
<input value='聚焦第2个' type="button" onclick="sss(2)" />
<input value='聚焦第3个' type="button" onclick="sss(3)" />
<input value='聚焦第4个' type="button" onclick="sss(4)" />
<input value='聚焦第5个' type="button" onclick="sss(5)" />
<input value='聚焦第6个' type="button" onclick="sss(6)" />
<input value='聚焦第7个' type="button" onclick="sss(7)" />
<input value='聚焦第8个' type="button" onclick="sss(8)" />
<input value='聚焦第9个' type="button" onclick="sss(9)" />
</div>
<script>
document.all&&document.execCommand("BackgroundImageCache", false, true);
var isIE = (document.all) ? true : false;
var $ = function (id) {
return  document.getElementById(id);
};
var Extend = function(destination, source) {
for (var property in source) {
destination[property] = source[property];
}
}
var Bind = function(object, fun,args) {
return function() {
return fun.apply(object,args||[]);
}
}
var BindAsEventListener = function(object, fun) {
var args = Array.prototype.slice.call(arguments).slice(2);
return function(event) {
return fun.apply(object, [event || window.event].concat(args));
}
}
var CurrentStyle = function(element){
return element.currentStyle || document.defaultView.getComputedStyle(element, null);
}
var Tween = {
Quart: {
easeOut: function(t,b,c,d){
return -c * ((t=t/d-1)*t*t*t - 1) + b;
}
}
}
// 烈火網 Veryｈuo。COM 欢迎复制,拒绝恶意采集 ｌｉｅｈｕｏ．ｎｅｔ
function create(elm,parent,fn){var element = document.createElement(elm);fn&&fn(element); parent&&parent.appendChild(element);return element};
function addListener(element,e,fn){ element.addEventListener?element.addEventListener(e,fn,false):element.attachEvent("on" + e,fn)};
function removeListener(element,e,fn){ element.removeEventListener?element.removeEventListener(e,fn,false):element.detachEvent("on" + e,fn)};
var Class = function(properties){
var _class = function(){return (arguments[0] !== null && this.initialize && typeof(this.initialize) == 'function') ? this.initialize.apply(this, arguments) : this;};
_class.prototype = properties;
return _class;
};
var  Imgroll =new Class({
options:{
Isrun   : false,
Step    : 100,
Time    : 10,
t       : 0,
b       : 0,
c       : 0,
d       : 60,
Tween   : Tween.Quart.easeOut,
Oninit  : function(){},
Onstart : function(){},
Onstop  : function(){}
},
initialize:function(obj,c,total,i,options){
this._obj   = obj;
this._c     = c;
this._total  = total;    //显示区域有多少张图片
this.i      = i ;        //聚焦于第i张图片
this.timer  = null;
this.Isrun  = this.options.isrun;
this.Step   = this.options.Step;
this.Time   = this.options.Time;
this.t      = this.options.t;
this.b      = this.options.b;
this.c      = this.options.c;
this.d      = this.options.d;
this.Tween  = this.options.Tween;
this.Oninit = this.options.Oninit;
this.Onstart= this.options.Onstart;
this.Onstop = this.options.Onstop;
Extend(this,options||{});
var self =this, i = 0,img = this._c.getElementsByTagName('a');
this._c.style.width = img.length*this.Step+'px';
for(;i<img.length;i++)
{
img[i].num = i;
(function(i){
addListener(img[i],'click',Bind(self,self.Start,[img[i]]));
})(i);
}
},
Start:function(c){
if(this.Isrun)return;
this.Isrun = true;
var img = this._c.getElementsByTagName('a')
this.b     = this._obj.scrollLeft;
c&&(this.c = c.num<this.i?(-1)*this.b:(c.num>img.length-(this._total-this.i+1)-1?(img.length - this._total)*this.Step - this.b:(c.num-this.i+1)*this.Step-this.b));
this.Onstart(c);
if(this.c==0){this.Isrun=false;return;}
this.Run();
},
Run:function(){
if(this.t<this.d)
{
this.RunTo(Math.round(this.Tween(++this.t,this.b,this.c,this.d)))
this.timer = setTimeout(Bind(this,this.Run),this.Time)
}
else
{
this.RunTo(this.b+this.c);
this.Stop();
}
},
RunTo:function(i){
this._obj.scrollLeft = i;
},
Pre:function(){
this.c = this.Step*(-1);
this.Start();
},
Next:function(){
this.c = this.Step;
this.Start();
},
Stop:function(){
clearTimeout(this.timer);
this.t = 0;this.Isrun=false;
this.Onstop()
}
})
var ss = new Imgroll($('middle'),$('thumblist'),9,5,{
Step:102,
Onstart:function(obj){
if(!obj)return;
this.o&&(this.o.className='');
this.o=obj;
obj.className ='cc';
},
Onstop:function(){
$('left').style.backgroundPosition=this._obj.scrollLeft == 0?"0px 0px":"-29px 0px";
$('right').style.backgroundPosition=this._obj.scrollLeft== 816?"0px 0px":"-29px 0px";
}});
addListener($('right'),'click',function(){ss.Next()});
addListener($('left'),'click',function(){ss.Pre()});
function sss(num){
ss.i=num;
$('nn').innerHTML = "聚焦第"+num+"个"
}
</script>
</body>
</html><br /><center>如不能显示效果，请按Ctrl+F5刷新本页，更多网页代码：<a href='http://www.veryhuo.com/' target='_blank'>http://www.veryhuo.com/</a></center>