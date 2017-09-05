<?php
// $a =['c':[1,1,1],'d':[2,4,6]];
// foreach ($a as $b){
// 	echo $b . "<br/>";
// }
  include 'dbcon.php';
  //Create database 
  // $sql = 'CREATE DATABASE myDb';
  // if($con->query($sql)===true){
  //     echo 'database create successful';
  // }else{
  // 	  echo 'error create database: ' .$con->error;
  // }

  // 插入表

  // $sql = 'CREATE TABLE MyGuests(
  //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   firstname VARCHAR(30) NOT NULL,
  //   lastname VARCHAR(30) NOT NULL,
  //   email VARCHAR(50),
  //   reg_date TIMESTAMP
  // )';
  
  // $sql = "INSERT INFO MyGuests (firstname,lastname,email)
  // VALUES ('John', 'Doe', 'john@example.com')";

  // if($con->query($sql)===TRUE){
  //   echo 'new record created successful';
  // }else{
  // 	echo 'Error' . $sql . "<br>" . $con->error;
  // }



//   $sql = "INSERT INTO 
// MyGuests (firstname, lastname, email)

// VALUES ('John', 'Doe', 'john@example.com');";

// $sql .= "INSERT INTO 
// MyGuests (firstname, lastname, email)

// VALUES ('Mary', 'Moe', 'mary@example.com');";

// $sql .= "INSERT INTO 
// MyGuests (firstname, lastname, email)

// VALUES ('Julie', 'Dooley', 'julie@example.com')";
  
  $sql = "SELECT id, firstname, lastname,email FROM MyGuests";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        // echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"];
        $Data[] = $row;
    }
    $Json['data'] = $Data;
    echo json_encode($Json);
} else {
    echo "0 results";
}
$arr = [213,11,33];

echo  '<br/>' . count($arr);


// if ($con->multi_query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $con->error;
// }

  $con->close();
?>


