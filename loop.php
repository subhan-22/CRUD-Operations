<?php

include 'connection.php';

$allPages = "SELECT * FROM pages";

$result = mysqli_query($connect, $allPages);

?>
    <table class="table table-bordered">
      <thead>
    <tr>
      <th scope="col">Page Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
    </tr>
    </thead>
    <tbody>
  <?php
if (mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){

    ?>

    <tr>
      <th scope="row"><?php echo $row ['page_id']; ?></th>
      <td><?php echo $row ['page_title']; ?></td>
      <td><?php echo $row ['page_description']; ?></td>
    </tr>

    <?php
    // echo 'ID : ' .$row['page_id'].
    // '<br>Page Title: '.$row['page_title'].
    // '<br>Page Description : '. $row['page_description'].
    // ' <br> <br> <br>';
  }
}
else {
  echo 'error';
}


 ?>
</tbody>
  </table>
