<?php
//抓取https下的资源，get方式
/* 
//初始化
$curlobj=curl_init();

//设置访问的url地址
curl_setopt($curlobj,CURLOPT_URL,"https://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js");

//执行后不直接打印出，不写会默认打印
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

/*//抓取http下的资源，get方式
$ch=curl_init();//初始化
curl_setopt($ch,CURLOPT_URL,'http://www.entboost.com');//设置访问的url
curl_setopt($ch,CURLOPT_HEADER,false);//不写此行业默认也不显示文档头信息，写此行false表示不显示
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//如果把这行去掉，最后会直接输出结果，默认0
$result=curl_exec($ch);
curl_close($ch);
echo $result;
*/
?>

<?php

//post数据后抓取数据
$ch=curl_init();
//这里要注意，要提交的数据不能是二维数组或者更高，只能是一维，例如下：
$data=array('name'=>'zhang','sex'=>1,'birth'=>'19890101');
curl_setopt($ch,CURLOPT_URL,'http://localhost/curl/demo2.php');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//不直接输出结果，而是返回值
//这两行是与get方式不同的地方
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

$result=curl_exec($ch);
//上面执行完后，下面这个会获取curl请求的输出信息
$info=curl_getinfo($ch); //得到的是大数组类似于$GLOBALS
echo "<pre>";
var_dump($info);
// curl_close($ch);
 //print_r($result);


https://www.cnblogs.com/manongxiaobing/p/4698990.html




?>
