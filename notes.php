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
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="css/notes.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
    <h2><span> Maths</span></h2>
    <section class="maths">
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Discrete Maths</a>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Integral Calculus</button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Show Both DSM and Integral Calc.</button>
      </p>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
            <p class="edit_notes">
              <a href="notes/Discrete/Module 1 Set Theory.pdf" target="blank">1) Laplace Transform</a>
              <br>
              <a href="notes/Discrete/Module 2 Logic.pdf" target="blank">2) Logic</a>
              <br>
              <a href="notes/Discrete/Module 3 Relations.pdf" target="blank">3) Relations</a>
              <br>
              <a href="notes/Discrete/Module 4 Posets and Lattice.pdf" target="blank">4) Posets and Lattice</a>
            </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
            <p class="edit_notes">
              <a href="notes/itvc/laplace trans.pdf" target="blank">1) Laplace Transform</a>
              <br>
              <a href="notes/itvc/Ques Bank-vec differentiation.pdf"target="blank">2) Vector Differentiation</a>
              <br>
              <a href="notes/itvc/Ques Bank-vector integration.pdf"target="blank">3) Vector Integration</a>
              <br>
              <a href="notes/itvc/Quesof Inv LT  Spl Fn 65-130.pdf"target="blank">4) Inverse Laplace Transform</a>
            </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <h2><span> C.O.A</span></h2>
    <section class="maths">
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Arithmetic-Logic Unit</a>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Central Processing Unit</button>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Show Both ALU and CPU</button>
      </p>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
            <p class="edit_notes">
              <a href="notes/coa/airthmetic/1.Number System.pdf" target="blank">1) Number System</a>
              <br>
              <a href="notes/coa/airthmetic/2.Integer Arithmetic.pdf" target="blank">2) Integer Arithmetic</a>
              <br>
              <a href="notes/coa/airthmetic/3.Booth Algorithm.pdf" target="blank">3) Booth Algorithm</a>
              <br>
              <a href="notes/coa/airthmetic/4.Booth example.pdf" target="blank">4) Booth Example</a>
            </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
            <p class="edit_notes">
              <a href="notes/coa/central/1.Cpu Architecture.pdf" target="blank">1) Cpu Architecture</a>
              <br>
              <a href="notes/coa/central/2.Register of Cpu.pdf"target="blank">2) Register of Cpu</a>
              <br>
              <a href="notes/coa/central/3.Instruction Format.pdf"target="blank">3) Instruction Format</a>
              <br>
              <a href="notes/coa/central/4Instruction cycle.pdf"target="blank">4) Instruction Cycle</a>
            </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </main>

  
</body>
</html>