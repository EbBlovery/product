<?php
include '../dbcon.php';

$li = json_decode(file_get_contents("example.json"),true);

$data = $li['data'];
$num = count($data);

for($i = 0;$i < $num;$i++){
   $product_name = $data[$i]['product_name'];
   $price = $data[$i]['price'];
   $star = $data[$i]['star'];
   $description = $data[$i]['description'];
   $assort = $data[$i]['assort'];
   $con->query("INSERT INTO Products (product_name,price,star,description,assort)VALUES ('$product_name','$price','$star','$description','$assort')");
   // print_r($product_name . $price . $star . $description . $assort);
}

// print_r($data);





// print_r($li);

// foreach ($li as $key => $value) {
// 	 $info = json_encode($value,JSON_UNESCAPED_UNICODE);
// }
// $aaa = json_decode($info);

// print_r($aaa);
// foreach ($json as $key => $value) {
// 	echo $key;
// }
// var_dump($json)
?>