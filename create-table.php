<?php
include 'connection.php';
$pages = "CREATE TABLE IF NOT EXISTS pages(
  page_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  page_title VARCHAR(30) NOT NULL,
  page_description TEXT
)";

if (mysqli_query($connect, $pages)){
  echo "Database table created";
}
else{
  echo "There is an error";
}
?>
