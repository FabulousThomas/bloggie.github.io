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
    <title>Admin || Edit Posts</title>
  </head>

  <body>

    <header class="main-header bg-dark bg-lg">
      <a href=""><h1>Blog<span class="text-primary">gie</span></h1></a>
    </header>

  <div class="admin-wrapper">

    <!-- LEFT SIDEBAR -->
    <div class="left-sidebar">
      <ul>
        <li><a href="index.php">Manage Posts</a></li>
        <li><a href="../topic/index.php">Manage Topics</a></li>
      </ul>
    </div>

    <!--  ADMIN CONTENT -->
    <div class="admin-content">

      <div class="btn-group">
        <a href="post.php" class="btn btn-primary btn-md mr-3">Add Posts</a>
        <a href="index.php" class="btn btn-primary btn-md">Manage Posts</a>
      </div>

      <div class="table-content">
        <h2 class="page-title">Edit Post</h2>

        <?php foreach($query as $q) {?>
          
          <form method="POST" enctype="multipart/form-data">
          <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="<?php echo $q['title'];?>" class="text-input">
          </div>
          <div>
            <label for="title">Body</label>
            <textarea name="content" id="body"><?php echo $q['content'];?></textarea>
          </div>
          <div>
            <label for="image">Image</label>
            <input type="file" name="image" src="images/<?php echo $q['image'];?>" class="text-input">
          </div>
          <div>
            <label for="topics">Date Created</label>
            <input type="date" name="created_at" value="<?php echo $q['created_at'];?>" class="text-input">
          </div>
          <div>
            <label for="topics">Author</label>
            <input type="text" name="author" value="<?php echo $q['author'];?>" class="text-input">
          </div>
          <div>
            <button type="submit" name="update" class="btn btn-primary btn-md mt-3">Update Post</button>
          </div>
        </form>

        <?php }?>
        
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