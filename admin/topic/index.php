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

  <style>
    input[type=submit] {
      color: red;
      background: transparent; 
      border:none; 
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      text-decoration: underline;
    }
  </style>
  <title>Admin || Manage Topics</title>
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

        <h2 class="page-title">Manage Topics</h2>

        <table>
          <thead>
            <th>SN</th>
            <th>Topics</th>
            <th>Description</th>
            <th colspan="2">Action</th>
            <tbody>
              <?php foreach($topic as $t) {?>
                <tr>
                  <td><?php echo $t['id'];?></td>
                  <td><?php echo $t['topic'];?></td>
                  <td><?php echo $t['description'];?></td>
                  <td><a href="edit.php?id=<?php echo $t['id'];?>" class="edit">Edit</a></td>
                  <td><form method="post">
                    <input type="text" name="id" hidden value="<?php echo $t['id'];?>">
                    <input type="submit" name="delete_topic" value="Delete">
                  </form></td>
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