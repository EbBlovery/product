<?php
  include '../dbcon.php';
  
  $sql = $con->get_results("SELECT * FROM Products");
  // header('Content-Type: text/html;charset=utf8');
  // header('content-type:application:json;charset=utf-8');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,OPTIONS');
// header('Access-Control-Allow-Headers:origin,x-requested-with,content-type');
  echo json_encode($sql,JSON_UNESCAPED_UNICODE);
  // foreach ($sql as $key => $value) {
  // 	 $Json[$key] = urlencode($value);
  // }

  // echo urldecode(json_encode($Json));
?>