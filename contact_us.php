<?php
$insert = false;
if(isset($_POST['name']))
{

    $server = "localhost";
    $username="root";
    $password="";
    $dbname = "login";

    $con = mysqli_connect($server,$username,$password,$dbname);

    if(!$con)
    {
        echo "Unsessful coneection";
    }
    {
     //   echo "Succesful connection to db";
    }

    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    $sql ="INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message');";

    if($con->query($sql) == true){
   //    echo "Successfully inserted";
            $insert = true;
    }else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/contact_us.css">
    <title>Contact Form</title>
    </style>
  </head>

  <body>

  <nav>
        <a href="Homepage.php">Home</a>
        |
        <a href="upload.php">Upload Notes</a>
        |
        <a href="displayPDF.php">Notes</a>
        |
        <a href="courses.php">Course</a>
      </li>
    </nav>
    <main>
    <h1 class="heading">Contact Us</h1>

    <div class="container">
    <form action="#" method="post">
    <p>
      Full Name:
      <input type="text" name="name" id="name" required placeholder="AABBCC" />
    </p>
   
    <p>
      Email:
      <input
        type="email"
        name="email"
        id="email"
        required
        placeholder="abc@gmail.com"
      />
    </p>
   
    <p>
      Subject:
      <input
        type="text"
        name="subject"
        id="sub"
        required
        placeholder="Enter Subject"
      />
    </p>
   
    <p>
      Message:
      <textarea
        name="message"
        id="message"
        cols="30"
        rows="5"
        required
        placeholder="Enter Message"
        required
      ></textarea>
  
    </p>

    <input type="submit" value="Submit" />
   
</form>
   </div>
    </main>

  </body>
  
</html>
