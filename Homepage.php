<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
  rel="stylesheet"
/>
    
    <link rel="stylesheet" href="css/homepage .css">
    <title>Home Page</title>
</head>
<body>
    
    <header>
        <h1>Enhance Your Future Here</h1>
    </header>

    <nav>
        <a href="Homepage.php">Home</a>
        |
        <a href="upload.php">Upload Notes</a>
        |
        <a href="displayPDF.php">Notes</a>
        |
        <a href="courses.php">Course</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#">  <?php echo "Welcome ". $_SESSION['username']?></a>
        |
        <a href="logout.php">Logout</a>
        |
        <a href="contact_us.php">Contact Us</a>
      </li>
    </nav>
   

    <main>
        
        <section class="cards">
            <div class="card" style="width: 18rem;">
                <img id="to" src="img/todo.jpg" class="card-img-top" alt="..." height="300px" >
                <div class="card-body">
                  <h5 class="card-title">To-do List</h5>
                  <p class="card-text">Create Focus While Studying With a to-do List</p>
                  <a href="todolist.php" class="btn btn-primary">Create</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <img src="img/notes.png" class="card-img-top" alt="..." height="300px" >
                <div class="card-body">
                  <h5 class="card-title">Access Notes</h5>
                  <p class="card-text">Get Access To Maths and C.O.A Notes</p>
                  <a href="notes.php" class="btn btn-primary">Check Out!</a>
                </div>
              </div>

        </section>

        <section class="subjects" style=" padding-left: 20px;">
            <h2> <span>Courses</span></h2>
            <div class="card" style="width: 13rem;">
              <a href="courses.php"><img src="img/hompage img/calc.jpg" class="card-img-top" alt="..."></a>
            </div>
            <div class="card" style="width: 14rem;">
              <a href="courses.php"><img src="img/hompage img/dicrete.png" class="card-img-top" alt="..."></a>
            </div>
            <div class="card" style="width: 17rem;">
              <a href="courses.php"><img src="img/hompage img/arithmetic.png" class="card-img-top" alt="..."></a>
            </div>
            <div class="card" style="width: 14rem;">
              <a href="courses.php"><img src="img/hompage img/central.jpg" class="card-img-top" alt="..."></a>
            </div>
        </section>

        <section class="quote">
            <h2><span>Quote Of the Day </span></h2>

            <div class="container">
                <img src="img/main.jpg" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                  <div class="text">ALL THE BEST!</div>
                </div>
              </div>
        </section>
        <br>
    </main>
    
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright
  </div>
  <!-- Copyright -->
</footer>
  
</body>
</html>