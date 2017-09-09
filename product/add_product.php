<?php
  include "../dbcon.php";

  header('content-type:application:json;charset=utf-8');
  header('Access-Control-Allow-Origin:*');
  header('Access-Control-Allow-Methods:POST,OPTIONS');
  header('Access-Control-Allow-Headers:origin,x-requested-with,content-type');


  $product_name = $_POST['product_name'];
  $description = $_POST['description'];
  $star = $_POST['star'];
  $price = $_POST['price'];
  $assort = $_POST['assort'];
  echo $product_name.$description.$price;
  $sql = $con->query("INSERT INTO Products (product_name,price,star,description,assort)VALUES ('$product_name','$price','$star','$description','$assort')");
  if($sql){
      $data['code']=0;
      print_r(json_encode($data));
  }else{
  	 echo 'error'.$con->error;
  }
?>