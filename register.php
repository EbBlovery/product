<?php
   include 'dbcon.php';

   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $pconfig = md5($_POST['pconfig']);
   $result = $con -> get_row("SELECT * FROM Users WHERE username='$username'");
   if(isset($result)){
       echo "用户名已被注册";
   }else if($password !== $pconfig){
       echo "请输入一致的密码";
   }else{
   	   $sql = $con->query("INSERT INTO users (username,password)VALUES ('$username','$password')");
   	   if($sql){
           echo '注册成功';
   	   }else{
   	   	   echo 'Error'.$con->error;
   	   }
   }
?>


