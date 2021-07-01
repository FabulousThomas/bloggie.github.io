<?php
  include "../../database/db.php"
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Admin || Add Topics</title>
  </head>

  <body>
  
    <header class="main-header bg-dark bg-lg">
      <a href=""><h1>Blog<span class="text-primary">gie</span></h1></a>
    </header>

  <div class="admin-wrapper">

    <!-- LEFT SIDEBAR -->
    <div class="left-sidebar">
      <ul>
        <li><a href="../post/index.php">Manage Posts</a></li>
        <li><a href="index.php">Manage Topics</a></li>
      </ul>
    </div>

    <!--  ADMIN CONTENT -->
    <div class="admin-content">

      <div class="btn-group">
        <a href="topic.php" class="btn btn-primary btn-md mr-3">Add Topic</a>
        <a href="index.php" class="btn btn-primary btn-md">Manage Topics</a>
      </div>

      <div class="table-content">

        <h2 class="page-title">Add Topics</h2>

        <form action="topic.php">
          <div>
            <label for="topic">Topic</label>
            <input type="text" name="title" class="text-input">
          </div>
          <div>
            <label for="description">Description</label>
            <textarea name="description" id="body"></textarea>
          </div>
          <div>
            <button type="submit" class="btn btn-primary btn-md mt-3">Add Topic</button>
          </div>
        </form>

      </div>
    </div>

  </div>
  <!-- admin-wrapper -->


  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>

  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> -->
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('body');
  </script>
  <script src="../../js/script.js"></script>

</body>
</html>