<?php
header("content-type:text/html;charset=utf8");
$pdo = new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
$user_name = $_GET['user_name'];
$sql = "SELECT * FROM user WHERE user_name='$user_name'";
$res = $pdo->query($sql);
if($res){
    echo "该用户名已被注册过";
}
?>