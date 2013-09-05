<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=gb2312" />
<meta name="copyright" content="js图片切换代码" />
<meta name="description" content="js图片切换代码" />
<meta content="js图片切换代码" name="keywords" />
<title>js图片切换代码</title>
</head>
<body>
<table width="300" height="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#f4f4f4">
  <tr>
    <td><script language=网页特效>
var elady_step=3; //1:small, 3:middle, 5:big
var elady_speed=50; //20:fast, 50:middle, 80:slow
var e_tp=new array();
var e_tplink=new array();
var adnum_elady1=0;  
var elady_stop_sh=0;
var elady_star_sh=1;
function elady1_moveimg(){
if ((!document.all&&!document.getelementbyid)||(elady_stop_sh==0)) return;
if (elady_star_sh==1){
 document.all.elady1_divimg.style.pixeltop=parseint(document.all.elady1_divimg.style.pixeltop)+elady_step;}
else if (elady_star_sh==2){
 document.all.elady1_divimg.style.pixelleft=parseint(document.all.elady1_divimg.style.pixelleft)+elady_step;}
else if (elady_star_sh==3){
 document.all.elady1_divimg.style.pixeltop=parseint(document.all.elady1_divimg.style.pixeltop)-elady_step;}
else{
 document.all.elady1_divimg.style.pixelleft=parseint(document.all.elady1_divimg.style.pixelleft)-elady_step;}
if (elady_star_sh<4) elady_star_sh++;
else elady_star_sh=1;
settimeout("elady1_moveimg()",elady_speed);}
e_tplink[0]="http://www.111cn.net/guanggaodaima/";
e_tp[0]="images/01.jpg";
e_tplink[1]="http://www.111cn.net/guanggaodaima/";
e_tp[1]="images/02.jpg";
e_tplink[2]="http://www.111cn.net/guanggaodaima/";
e_tp[2]="images/03.jpg";
e_tplink[3]="http://www.111cn.net/guanggaodaima/";
e_tp[3]="images/04.jpg";
var currentimage=new array();   
for (i=0;i<=3;i++){currentimage[i]=new image();
      currentimage[i].src=e_tp[i];
         }
         function elady1_set(){   if (document.all)
         {      e_tprotator.filters.revealtrans.transition=math.floor(math.random()*23);
               e_tprotator.filters.revealtrans.apply();   }
               }
               function elady1_playco()
               {   if (document.all)      e_tprotator.filters.revealtrans.play()
               }function elady1_nextad(){   if(adnum_elady1<e_tp.length-1)adnum_elady1++ ;
                     else adnum_elady1=0;
                        elady1_set();
                           document.images.e_tprotator.src=e_tp[adnum_elady1];
                              elady1_playco();
                                 thetimer=settimeout("elady1_nextad()", 4000);}
                                 function elady1_linkurl(){   jumpurl=e_tplink[adnum_elady1];
                                    jumptarget='_blank';
                                       if (jumpurl != ''){      if (jumptarget != '')window.open(jumpurl,jumptarget);
                                             else location.href=jumpurl;
                                                }}
function elady1_listmsg() 
{   status=e_tplink[adnum_elady1];
document.returnvalue = true;}
document.write("<div id='elady1_divimg' style='position:relative'>");
document.write('<a onmouseo教程ver="elady1_listmsg();return document.returnvalue" href="javascript:elady1_linkurl()" target="_self">');
document.write('<img style="filter: revealtrans(duration=2,transition=20)" height=300 src="javascript:elady1_nextad()" width=300 border=0 name=e_tprotator ></a>');
document.write("</div>");
    </script></td>
  </tr>
</table>
</body>
</html>