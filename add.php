<?php
  include 'dbcon.php';
  // 创建 users 表；
  // $sql = "CREATE TABLE users (
  //    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //    username VARCHAR(30) NOT NULL,
  //    password VARCHAR(30) NOT NULL,
  //    create_date TIMESTAMP
  // )";
  // if($con->query($sql)===true){
  //    echo 'table users created successful';
  // }else{
  // 	 echo 'error :' . $con->error;
  // }
  // $sql = $con->query("CREATE DATABASE Product");
  // if($sql){
  //     echo 'successful';
  // }else{
  //    echo 'error' . $con->error;
  // }

  // $sql = "CREATE TABLE Products (
  //    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  //    product_name VARCHAR(15) NOT NULL,
  //    price DECIMAL(10,2) NOT NULL,
  //    star DECIMAL(2,1) NOT NULL,
  //    description VARCHAR(50),
  //    assort VARCHAR(50) NOT NULL,
  //    crate_date TIMESTAMP
  // ) ENGINE=MyISAM DEFAULT CHARSET=utf8";
  // if($con->query($sql) === true){
  //   echo "susseful";
  // }else{
  //   echo "err";
  // }
  $sql = $con->query("INSERT INTO Products (product_name,price,star,description,assort)VALUES ('第二个商品','2.99','2.5','第二个商品，啥快递你拉开始发的那','电子商品')");
  if($sql){
     echo "susseful";
  }else{
    echo "err".$con->error;
  }
  
?>