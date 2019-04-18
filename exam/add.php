<?php

$name=$_POST['name'];//接收值
$fz=$_POST['fz'];
$tell=$_POST['tell'];
$title=$_POST['title'];
$stat=$_POST['stat'];

include "db.php";  //引入 db 类
$obj=new db();  //实例化类
$res=$obj->add($name,$fz,$tell,$title,$stat);  //添加方法
if($res){
    echo "<script>alert('添加成功');location.href='list.php'</script>";  //提示添加成功
}