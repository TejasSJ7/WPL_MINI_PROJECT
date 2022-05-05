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
    <link rel="stylesheet" href="css/courses.css">
    <title>Notes</title>
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
        <section class="maths_notes">
            <h2><span> Maths</span></h2>
            <br><br><br><br>
            <a href="maths_notes_1.php">Discrete Maths</a>
            <a href="maths_notes_2.php">Integral Calc.</a>
        </section>
        <br><br>
        <section class="maths_notes">
            <h2><span>COA</span></h2>
            <br><br><br><br>
            <a href="arithmetic_notes.php">arithmetic-logic unit </a>
            <a href="coa_notes_2.php">Central Process. Unit</a>
        </section>
    </main>


</body>
</html>