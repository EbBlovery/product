<?php
  include '../dbcon.php';

  $sql = $con->get_results("SELECT * FROM Products");
  header('Content-Type: text/html;charset=utf8');
  // print_r(json_encode($sql));
  foreach ($sql as $key => $value) {
  	 $Json[$key] = urlencode($value);
  }

  print_r(urldecode(json_encode($Json)));
?>