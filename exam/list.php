<?php
include "db.php";//引入 db 类
$obj=new db();  //实例化
$data=$obj->sel();  //指向 查询方法
include "show.html";  //引入模板文件