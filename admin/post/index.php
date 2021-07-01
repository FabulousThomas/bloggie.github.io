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
  <title>Admin || Manage posts</title>
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
        <a href="post.php" class="btn btn-md btn-primary mr-3">Add Posts</a>
        <a href="index.php" class="btn btn-md btn-primary">Manage Posts</a>
      </div>

      <div class="table-content">

        <h2 class="page-title">Manage Posts</h2>

        <table>
          <thead>
            <th>SN</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="2">Action</th>
            <tbody>
              <?php foreach($result as $r) {?>
              <tr>
                <td><?php echo $r['id'];?></td>
                <td><?php echo $r['title'];?></td>
                <td><?php echo $r['author'];?></td>
                <td><a href="edit.php?id=<?php echo $r['id'];?>" class="edit">Edit</a></td>
                <form action="" method="post">
                  <input type="text" hidden name="id" value="<?php echo $r['id'];?>">
                  <td><input type="submit" name="delete" value="Delete" class="delete btn btn-sm" style="color: red; background: transparent; font-size: 1.2rem;"></td>
                </form>
              </tr>
              <?php }?>
              
            </tbody>
          </thead>
        </table>
      </div>
    </div>

  </div>
  <!-- admin-wrapper -->

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  
</body>
</html>