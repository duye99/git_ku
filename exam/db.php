<?php

class db{
    protected $db; //定义一个受保护的 属性

    public function __construct(){  //连接数据库
        $dsn = "mysql:host=localhost;dbname=exam";
        $this->db=new PDO($dsn,'root','root');
    }

    //添加
    public function add($name,$fz,$tell,$title,$stat){
        $sql="insert into info values (null ,'$name','$fz','$tell','$title','$stat')";
        $res=$this->db->prepare($sql);
        $res->execute();
        return true;
    }

    //单条查询
    public function one($id){
        $sql="select * from info where id=:id";
        $res=$this->db->prepare($sql);
        $res->execute([':id'=>$id]);
        return $res->fetch();
    }

    //修改
    public function upd($name,$fz,$tell,$title,$stat){
        $sql="update info set name='$name',fz='$fz',tell='$tell',title='$title',stat='$stat'";
        $res=$this->db->prepare($sql);
        $res->execute();
        return true;
    }

    //查询
    public function sel(){
        $sql="select * from info";
        $res=$this->db->prepare($sql);
        $res->execute();
        return $res->fetchAll();
    }

    //删除
    public function del($id){
        $sql="delete from info where id=:id";
        $res=$this->db->prepare($sql);
        $res->execute([':id'=>$id]);
        return true;
    }

}