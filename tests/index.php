
<?php
header ('Content-type:text/html;charset=utf-8');
$data = file_get_contents("cwx/cwx.txt");
//jiang json转换成对象
$object = json_decode($data);
//访问对象属性
$number = $object->number;
$name= urldecode($object->name);
$age = $object->age;
$sex= $object->sex;
$strength = $object->strength;


?>
<meta http-equiv= "Content-Type" content=" text/html; charset=UTF-8"> 


<img src = "cwx/cwx.JPG"/>;
<h1>我的信息</h1>
<hr/>
<table cellpadding=0 cellsapcing=0 align='center' border=1>
<tr>
<th width='150'>项目</th><th  width='150'>内容</th>
</tr>
<tr>
<td>学号</td><td><?=$number?></td>
</tr>
<tr>
<td>姓名</td><td><?=$name?></td>
</tr>
<tr>
<td>年龄</td><td><?=$age?></td>
</tr>
<tr>
<td>性别</td><td><?=$sex?></td>
</tr>
<tr>
<td>特长</td><td><?=$strength?></td>
</tr>
</table>


