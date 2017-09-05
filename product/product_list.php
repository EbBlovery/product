<?php
  include '../dbcon.php';

  $sql = $con->get_results("SELECT * FROM Products");
  header('Content-Type: text/html;charset=utf8');
  echo json_encode($sql,JSON_UNESCAPED_UNICODE);
  // foreach ($sql as $key => $value) {
  // 	 $Json[$key] = urlencode($value);
  // }

  // echo urldecode(json_encode($Json));
?>