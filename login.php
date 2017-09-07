<?php
  include 'dbcon.php';

  $username = $_POST['username'];
  $password = $_POST['password'];
  $data = array();
  $result = $con -> get_row("SELECT * FROM Users WHERE username='$username'");  
  if(!isset($result)){
      echo '用户名或密码错误';
  }else{
     if($result->password === md5($password)){
        // print_r(json_encode($result));
       $data['code'] = 0;
       $arr = range(0,9);
       shuffle($arr);
       $ran = md5($username . $password . $arr[0]);
       $sql = $con->query("UPDATE Usertoken SET token = '$ran' WHERE id = 1");
       $data['token'] = $ran;
       print_r(json_encode($data));
     }else{
        echo "密码错误";
     }
  }

  // while($row = $result-> fetch_assoc()){
  // 	// echo substr(md5($password),0,strlen(md5($password)-2));
  //    if(!$row['username']){
  //       echo 'errorsss'.$con->error;
  //    }else{
  //    	// echo $row['password'] . '  ' .md5($password);
  //    	if(md5($password)===$row['password']){
  //          echo 'successful';
  //    	}else{
  //    		echo '密码错误';
  //    	}
  //    }
  // }


 

  // $result = mysqli_query($con,"SELECT * FROM MyGuests WHERE firstname='$name'");

 //  while($row = mysqli_fetch_array($result))
 // {
 	// echo $row;
 // echo $row['firstname'] . " " . $row['lastname'];
 // echo "<br>";
 // 	$Data[] = array($row);
 // }
 //  $Json['data'] = json_encode($Data);
 //  print_r($Json);
 //  // echo $sql;
 //  $con->close()
 //    $sql = "INSERT INTO users (username,password)VALUES ('$username','$password')";
 //    if ($con->query($sql) === TRUE) {
	//     echo "New record created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }
?>