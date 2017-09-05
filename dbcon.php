<?php


  include_once '/ezSQL/shared/ez_sql_core.php';
  include_once '/ezSQL/mysqli/ez_sql_mysqli.php';



  header('Content-Type: text/html;charset=utf8');
  $servername = 'localhost';
  $usrename = 'root';
  $password = '';
  $dbname = 'myDb';


  // $con = new mysqli($servername,$usrename,$password,$dbname);
  $con = new ezSQL_mysqli($usrename,$password,$dbname,$servername);
  if(!$con){
     die('连接失败'.$con->connect_error);
  }
?>