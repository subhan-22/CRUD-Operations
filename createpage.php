<?php

include 'connection.php';

$pagetitle = $_POST['pageTitle'];
$pageDescription = $_POST['page_description'];

echo "<br> $pagetitle";
echo "<br> $pageDescription";

$insert = "INSERT INTO pages (
  page_title, page_description)
  VALUES('$pagetitle', '$pageDescription'
  )";

if (mysqli_query($connect, $insert)){
  echo "<br> Data inserted";
}
else {
  echo "There is an error";
}

 ?>
