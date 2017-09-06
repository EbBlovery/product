<?php
    include '../dbcon.php';

    // echo $_SERVER['QUERY_STRING'];
    
	$str = parse_url_param($_SERVER['QUERY_STRING']);
    $star = $str['star'];
    $id = $str['id'];

    // echo $star . $id;

    $sql = $con->query("UPDATE Products SET star = '$star' WHERE id = '$id'");
    if($sql){
       echo '更新成功！';
    }else{
    	echo 'error :' . $con->error;
    }
?>