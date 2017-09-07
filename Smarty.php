<?php 
include("Smarty/Smarty.class.php");//加载模板引擎可以自定义模板引擎文件将其加载、自定义模板引擎文件必须包含如下函数以及属性等
$smarty = new Smarty();
$title = "smarty模板引擎";
$content = "云哥哥是陕北第一帅哥、是天下第一好男人";
$lps = "timg.jpg";
$smarty->assign("title",$title);//向指定模板文件中分配变量
$smarty->assign("content",$content);
$smarty->assign("lps",$lps);
$smarty->display("2.html");//用指定模板文件显示
$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setConfigDir('./configs');
$smarty->setCacheDir('./cache');
//var_dump($smarty);
//$ids = file_get_contents("2.html");
//echo $ids;