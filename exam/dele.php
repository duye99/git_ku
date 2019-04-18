<?php
$id=$_GET['id'];  //传id
include "db.php";
$obj=new db();  //实例化 db 类
$res=$obj->del($id);
if($res){
    echo "<script>alert('删除成功');location.href='list.php'</script>";
}