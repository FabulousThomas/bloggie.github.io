<?php
  $msg = "";
  $conn = mysqli_connect("localhost", "root", "", "bloggie");

  if(isset($_POST['post'])) {

    // The path to store the uploaded image
    $target = "C:/xampp/htdocs/bloggie/bloggie.github.io/images/".basename($_FILES['image']['name']);
    
    // Get all submited data from the form
    $title = $_POST['title'];
    $author = $_POST['author'];
    $created_at = $_POST['created_at'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $image_temp =$_FILES['image']['tmp_name'];

    // Insert data into table: "Posts"
    $sql = "INSERT INTO posts (title, author, created_at, content, image) VALUES ('$title', '$author', '$created_at', '$content', '$image')";
    if(mysqli_query($conn, $sql)) {
      echo "<script> alert('Post added successfully!') </script>";
    }

    // Move uploaded image into the folder: "images"
    if(move_uploaded_file($image_temp, $target)) {
      $msg = "Image uploaded";
    } else {
      $msg = "There was a problem";
    }

 }

  $query = "SELECT * FROM posts ORDER BY id DESC";
  $result = mysqli_query($conn, $query);
  

  if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    
    $sql = "SELECT * FROM posts WHERE id = $id";
    $query = mysqli_query($conn, $sql);
  }

  // UPDATE POST QUERY
if(isset($_REQUEST["update"])) {

  // The path to store the uploaded image
  $target = "C:/xampp/htdocs/bloggie/bloggie.github.io/images/".basename($_FILES['image']['name']);

  $title = $_POST['title'];
  $author = $_POST['author'];
  $created_at = $_POST['created_at'];
  $content = $_POST['content'];
  $image = $_FILES['image']['name'];
  $image_temp =$_FILES['image']['tmp_name'];
  
  $sql = "UPDATE posts SET title='$title', author='$author', created_at='$created_at', content='$content', image='$image' WHERE id = $id";
  if(mysqli_query($conn, $sql)) {
    echo "<script> alert('Post Updated successfully') </script>";
  }

  // Move uploaded image into the folder: "images"
  if(move_uploaded_file($image_temp, $target)) {
    $msg = "Image uploaded";
  } else {
    $msg = "There was a problem";
  }
}

// Delete Posts
if(isset($_REQUEST['delete'])) {
  $id = $_REQUEST['id'];

  $sql = "DELETE FROM posts WHERE id = $id";
  $query = mysqli_query($conn, $sql);

  if($query) {
    echo "<script> alert('Post Deleted successfully') </script>";
  }
}

?>
