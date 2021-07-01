<?php
  include "../bloggie.github.io/database/db.php"
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
    table tr td img{
      width: 50px !important;
      height: 50px !important;
    }
  </style>
  <title>Admin || Manage posts</title>
</head>

<body>

  <header class="main-header bg-dark bg-lg">
    <a href=""><h1>Blog<span class="text-primary">gie</span></h1></a>
  </header>


  <div class="admin-wrapper">
    <div class="container text-center">
      <h3>Insert and Display images using php and mysql</h3>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="image" id="image" class="text-input">
      <br/>
      <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-primary btn-sm">
    </form>
    <br/>
    <br/>

    <table class="table table-ordered">
    <?php foreach($result as $r) {?>
        
      <tr>
        <th><img name="image" src="images/<?php echo $r['image'];?>"></th>
      </tr>

      <?php }?>
    </table>

    </div>
    

  </div>
  <!-- admin-wrapper -->

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  
  <script>
    $(document).ready(function() {
      $('#insert').click(function() {
        var image_name = $('#image').val();
        if(image_name == "") {
          alert("Please select an image");
          return false;
        } else {
          var extension = $('#image').val().split('.').pop().toLowerCase();
          if(JQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert('Invalid image file');
            $('#image').val('');
            return false;
          }
        }
      });
    });
  </script>

</body>
</html>