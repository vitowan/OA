<?php
//抓取https下的资源
 /*
//初始化
$curlobj=curl_init();
//设置访问的url地址
curl_setopt($curlobj,CURLOPT_URL,"https://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js");

//执行后不直接打印出
curl_setopt($curlobj,CURLOPT_RETURNTRANSFER, true);

//设置https支持
date_default_timezone_get('PRC');//使用cookie时，必须先设置时区
curl_setopt($curlobj,CURLOPT_SSL_VERIFYPEER,0);//终止从服务器验证

$output=curl_exec($curlobj);//执行获取内容
curl_close($curlobj);//关闭curl
//原样输出内容
//echo "<pre>";
//echo $output;


//创建一个文件
$myfile=fopen('testfile.html','w');
//获取的网站内容放到文件中
fwrite($myfile,$output);
//关闭文件资源
fclose($myfile);*/



?>
<?php

/*//抓取http下的资源

$ch=curl_init();//初始化
curl_setopt($ch,CURLOPT_URL,'http://www.entboost.com');//设置访问的url
curl_setopt($ch,CURLOPT_HEADER,false);//不写此行业默认不显示文档头信息，写此行false表示不显示
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//如果把这行去掉，最后回直接输出结果，默认0
$result=curl_exec($ch);
curl_close($ch);
//echo $result;*/










?>
