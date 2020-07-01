
<?php include 'Views/header.php'; ?>


    <div class="container">
      <form action="createpage.php" method="post">
        <div class="form-group">
          <label for="page_title">Page Title</label>
          <input name="pageTitle" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label for="page-desc">Page Description</label>
          <textarea name="page_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>

    <?php include 'Views/footer.php'; ?>
