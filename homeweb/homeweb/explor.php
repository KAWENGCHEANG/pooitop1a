<?
#  -----------------------------------------  #  
#  �{���W�١GC.P.Sub���i�t��                  #
#  �]�p�̡GCooltey                            # 
#  E-Mail�Gcoolteygame@gmail.com             #
#  HomePage�Ghttp://www.cooltey.org            #
#  �{�������GV4.5                            #
#  �̫��s�G2008/9/1                         #
#  �`�N�A�����v�ŧi���o�R���A�{���i���N�ק�I # 
#  �̤U���@�檺 Powered By Cooltey �Ф��n�R�� #
#  -----------------------------------------  #
?>
<? # �Nto_set.php�ɮ׾ɤJ ?>
<? require("to_set.php");?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>View</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>

<body background="<?=$background;?>" bgcolor="<?=$bgcolor;?>">
<? 
# �}��sub.dat���ɮ�
$lines=file("sub.dat");  
$count=count($lines);  
?> 
<p> 
<center> 
<? 
$n_id=$_GET['id'];
# �������Τ���for()�ӭ��Ƥ��ΡA�������Y�C���Ȩ���ܨ�s������
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("��",$lines[$n_id-1]); 
# �h��php�����׽u�ĽX 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);  
# �P�_$updname����
if($updname==""){ 
$updname="<font color=#CC6600 size=1 face=Verdana></font>"; 
}else{
$updname="<a href=./data/$updname target='_new'><font size=1 color=$login_font face='Verdana'>$updname</font></a>";
}
# �P�_$url
if($url==""){ 
$url="<font color=#CC6600 size=1 face=Verdana></font>"; 
}else{
$url="<a href=$url target='_new'><font size=1 color=$login_font face='Verdana'>$url</font></a>";
}
# �P�_$mail����
if($mail!=""){
	  $person="<a href='mailto:$mail'><font color='$menu_font' size='1' face='Verdana'>$name</font></a>";
	}else{
	  $person="<font color='$menu_font' size='1' face='Verdana'>$name</font>";
	}
if($style_pic=="open"){
          $kind_pic="<img src='$kind'></img>";
        }else{
          $kind_pic="";
}
?> 
<table border="0" width="<?=$form_size;?>"> 
  <tr> 
    <td width="100%" colspan="3" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>"> 
      <p align="center"><font size="2" color="<?=$title_font;?>">View</font></td> 
  </tr> 
  <tr> 
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" rowspan="2"><font size="2" color="<?=$menu_font;?>">Contents:</font></td> 
    <td width="56%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $kind_pic ;?><font size="2" color="<?=$menu_font;?>" face="Verdana"><?= $title ;?></font></td>  
    <td width="24%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>" face="Verdana">From</font><font size="2" color="<?=$menu_font;?>">:</font><?= $person ;?></td> 
  </tr> 
<center>    
  <tr> 
    <td width="80%" height="50" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><font size="2" color="<?=$explor_font;?>" face="Verdana"><?= $note ;?></font></td> 
  </tr> 
  <tr> 
    <td width="20%" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Date of the announcement : </font></td> 
    <td width="80%" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><font color="<?=$menu_font;?>" size="1" face="Verdana"><?= $date ;?></font></td>  
  </tr>  
  <tr>  
    <td width="20%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Documents:</font></td> 
    <td width="80%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><?= $updname ;?></td> 
  </tr> 
  <tr> 
    <td width="20%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">Links:</font></td> 
    <td width="80%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="2"><?= $url ;?></td> 
  </tr> 
</table> <br>
<a href="sub.php"><font color="<?=$font_link;?>" size="2">Back home</font></a> 
</center>   
�@  
</body>  
  
</html>  