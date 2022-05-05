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
    <link rel="stylesheet" href="css/maths_1.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <title>Maths DSM Notes</title>
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
   

    
    <section class="cards">
        <div class="card" style="width: 25rem;">
          <video src="video/informative video.mkv" controls poster="img/bg2.jpg" class="card-img-top" width="45%"></video>
            <div class="card-body">
              <h5 class="card-title">Cpu Architecture</h5>
              <a href="notes/coa/central/1.Cpu Architecture.pdf" class="btn btn-primary" target="blank">Notes</a>
            </div>
          </div>

          <div class="card" style="width: 25rem;">
            <video src="video/informative video.mkv" controls poster="img/bg2.jpg" class="card-img-top" width="45%"></video>
            <div class="card-body">
              <h5 class="card-title">Register of Cpu</h5>            
              <a href="notes/coa/central/2.Register of Cpu.pdf" class="btn btn-primary" target="blank">Notes</a>
            </div>
          </div>

          <div class="card" style="width: 25rem;">
            <video src="video/informative video.mkv" controls poster="img/bg2.jpg" class="card-img-top" width="45%"></video>
            <div class="card-body">
              <h5 class="card-title">Instruction Format</h5>
              <a href="notes/coa/central/3.Instruction Format.pdf" class="btn btn-primary" target="blank">Notes</a>
            </div>
          </div>

          <div class="card" style="width: 25rem;">
            <video src="video/informative video.mkv" controls poster="img/bg2.jpg" class="card-img-top" width="45%"></video>
            <div class="card-body">
              <h5 class="card-title">Instruction cycle</h5>
              <a href="notes/coa/central/4Instruction cycle.pdf" class="btn btn-primary" target="blank">Notes</a>
            </div>
          </div>

    </section>

</body>
</html>