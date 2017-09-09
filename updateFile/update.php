<?php
    include '../dbcon.php';

    // echo $_SERVER['QUERY_STRING'];
    $star = $_POST['star'];
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $assort = $_POST['assort'];

    // echo $star . $id;

    $a = $con->query("UPDATE Products SET star = '$star' WHERE id = '$id'");
    $b = $con->query("UPDATE Products SET product_name = '$product_name' WHERE id = '$id'");
    $c = $con->query("UPDATE Products SET description = '$description' WHERE id = '$id'");
    $d = $con->query("UPDATE Products SET price = '$price' WHERE id = '$id'");
    $e = $con->query("UPDATE Products SET assort = '$assort' WHERE id = '$id'");
    if($a && $b && $c && $d && $e){
       echo '更新成功！';
    }else{
    	echo 'error :' . $con->error;
    }
?>