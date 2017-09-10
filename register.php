<?php
   include 'dbcon.php';
   
   header('content-type:application:json;charset=utf-8');
   header('Access-Control-Allow-Origin:*');
   header('Access-Control-Allow-Methods:POST,OPTIONS');
   header('Access-Control-Allow-Headers:origin,x-requested-with,content-type');

   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $pconfig = md5($_POST['pconfig']);
   $result = $con -> get_row("SELECT * FROM Users WHERE username='$username'");

   if(isset($result)){
       $data['code']=2;
       print_r(json_encode($data));
   }else if($password !== $pconfig){
       $data['code']=1;
       print_r(json_encode($data));
   }else{
   	   $sql = $con->query("INSERT INTO users (username,password)VALUES ('$username','$password')");
   	   if($sql){
           $data['code']=0;
           print_r(json_encode($data));
   	   }else{
   	   	   echo 'Error'.$con->error;
   	   }
   }
?>


