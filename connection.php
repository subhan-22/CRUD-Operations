<?php
$db_name = "phpcrudpracticedb";
$db_user = "root";
$db_password = "";
$db_host = "localhost";


//Create connection
$connect = new mysqli($db_host, $db_user, $db_password, $db_name);
// Check fann_get_total_connections

if ($connect->connect_error){
  echo "Connection Error";
}
else{
  // echo "Database connected";
}

?>
