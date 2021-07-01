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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/menu.css">
  <title>Home || Bloggie</title>
</head>

<body style="background: #f4f4f4;">

  <!-- HAMBURGER MENU -->
  <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
      <div></div>
    </div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- HAMBURGER MENU END -->

  <header class="main-header bg-dark bg-lg">
    <a href=""><h1>Blog<span class="text-primary">gie</span></h1></a>
    <nav class="main-nav">
      <ul class="main-nav__item">
        <li class="main-nav__items"><a href="">home</a></li>
        <li class="main-nav__items"><a href="">about</a></li>
        <li class="main-nav__items"><a href="">contact</a></li>
      </ul>
      <!-- <form action="index.php">
        <input type="search" name="search" placeholder="Search...">
      </form> -->
    </nav>
  </header>

  <section class="hero text-center p-5">
    <div class="container p-5">
      <h1 class="hero-title text-white">Non-Stop Blog Posts</h1>
      <p class="lead text-white text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia debitis tempora omnis ea harum veniam illo reiciendis asperiores fugit cumque!</p>
      <a href="" class="btn btn-primary btn-md">Read More &rarr;</a>
    </div>
  </section>

  <section class="page-wrapper mt-5">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-8">
          <h2 class="pb-3">Trending Posts</h2>

          <?php foreach($result as $r) {?>

          <div class="row bg-white mb-3">
            <div class="col-md-5 p-0">
              <img name="image" src="images/<?php echo $r['image'];?>" alt="" class="post-image">
            </div>
            <div class="col-md-7 py-3">
              <h4 class="post-title"><a href="single.php"><?php echo $r['title'];?></a></h4>
              <i class="fa fa-user"> <?php echo $r['author'];?></i> &nbsp;
              <i class="fa fa-calendar"> <?php echo $r['created_at'];?></i>
              <div id="dash">
                <p class="post-content pt-1"><?php echo $r['content'];?></p>
              </div>
              <a href="single.php?id=<?php echo $r['id'];?>" class="btn btn-outline-dark btn-md mt-2">Read More &rarr;</a>
            </div>
          </div>

          <?php }?>
        </div>

        <!-- SIDEBAR -->
        <div class="col-md-4 sidebar">
          <div class="section search">
            <form action="index.php">
              <input type="search" name="search" class="text-input" placeholder="Search...">
            </form>
          </div>

          <div class="section topics">
            <h4 class="section-title">Topics</h4>
            <ul>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Quotes</a></li>
              <li><a href="#">Fictions</a></li>
              <li><a href="#">Biography</a></li>
              <li><a href="#">Motivation</a></li>
              <li><a href="#">Inspiration</a></li>
              <li><a href="#">Life Lessons</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <footer class="bg-dark pt-3 mt-5">
    <div class="container">
      <div class="row text-white">
        <div class="col-md-4 my-4">
          <h4 class="text-white">Get In Touch</h4>
          <form action="" method="post">
            <input type="email" name="email" class="text-input bg-dark text-white mb-2" placeholder="Email">
            <textarea name="message" class="text-input bg-dark text-white mb-2" placeholder="Message"></textarea>
            <a href="" class="btn btn-primary btn-sm px-3">&rarr; Send</a>
          </form>
        </div>
        <div class="col-md-4 my-4">
          <h4 class="text-white">Quick Links</h4>
          <ul>
              <a href=""><li>Home</li></a>
              <a href=""><li>About Us</li></a>
              <a href=""><li>Contact</li></a>
              <a href=""><li>Privacy Policy</li></a>
              <a href=""><li>Terms and Condition</li></a>
            </ul>
        </div>
        <div class="col-md-4 my-4">
          <h2 class="text-white">Blog<span class="text-primary">gie</span></h2>
          <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt modi veniam, vel doloremque commodi sed neque aliquam dicta autem ad.</p>
          <div class="social text-white">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="copy text-center py-3">
      <p class="">copyright &copy; 2020 - <script>
        var currentYear = new Date().getFullYear();
        document.write(currentYear);
      </script> Blog<span class="text-primary">gie</span></p>
    </div>
  </footer>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="../bloggie/js/script.js"></script>
  
</body>

</html>