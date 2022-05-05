<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <link rel="stylesheet" href="css/todolist.css">
    <title>TODOs List</title>
    <script>
        let a;
        let date;
        let time;
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        setInterval(() => {
            a = new Date(); 
            date = a.toLocaleDateString(undefined, options);
            time = a.getHours() + ':' + a.getMinutes() + ':' + a.getSeconds();
            document.getElementById('time').innerHTML = time + "<br>on " + date;
        }, 1000);
    </script>
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
   
    
<div class="time">
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Current time Is: <span id="time"></span></h1>
        </div>
    </div>
</div>
    <hr>
    <div class="container my-4">
        <h2 class="text-center">TODOs List</h2>
         
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Add an item to the list</small>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            

            <button   id="add" class="btn btn-primary">Add to list</button>
            <button  id="clear" class="btn btn-primary" onclick="clearStorage()">Clear list</button>
         

        <div id="items" class="my-4">
            <h2>Your Items</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SNo</th>
                    <th scope="col">Item Title</th>
                    <th scope="col">Item Description</th> 
                    <th scope="col">Actions</th> 
                  </tr>
                </thead>
                <tbody id="tableBody">
                  <tr>
                    <th scope="row">1</th>
                    <td>Get some Coffee</td>
                    <td>You need coffee as you are a coder</td> 
                    <td><button class="btn btn-sm btn-primary">Delete</button></td> 
                  </tr>
                  
                </tbody>
              </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
        <script>
            function getAndUpdate(){
                console.log("Updating List...");
                tit = document.getElementById('title').value;
                desc = document.getElementById('description').value;
                if (localStorage.getItem('itemsJson')==null){
                    itemJsonArray = [];
                    itemJsonArray.push([tit, desc]);
                    localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray))
                }
                else{
                    itemJsonArrayStr = localStorage.getItem('itemsJson')
                    itemJsonArray = JSON.parse(itemJsonArrayStr);
                    itemJsonArray.push([tit, desc]);
                    localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray))
                }
                update();
            }

            function update(){
                if (localStorage.getItem('itemsJson')==null){
                    itemJsonArray = []; 
                    localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray))
                } 
                else{
                    itemJsonArrayStr = localStorage.getItem('itemsJson')
                    itemJsonArray = JSON.parse(itemJsonArrayStr); 
                }
                // Populate the table
                let tableBody = document.getElementById("tableBody");
                let str = "";
                itemJsonArray.forEach((element, index) => {
                    str += `
                    <tr>
                    <th scope="row">${index + 1}</th>
                    <td>${element[0]}</td>
                    <td>${element[1]}</td> 
                    <td><button class="btn btn-sm btn-primary" onclick="deleted(${index})">Delete</button></td> 
                    </tr>`; 
                });
                tableBody.innerHTML = str;
            }
            add = document.getElementById("add");
            add.addEventListener("click", getAndUpdate);
            update();
            function deleted(itemIndex){
                console.log("Delete", itemIndex);
                itemJsonArrayStr = localStorage.getItem('itemsJson')
                itemJsonArray = JSON.parse(itemJsonArrayStr);
                // Delete itemIndex element from the array
                itemJsonArray.splice(itemIndex, 1);
                localStorage.setItem('itemsJson', JSON.stringify(itemJsonArray));
                update();

            }
            function clearStorage(){
                if (confirm("Do you areally want to clear?")){
                console.log('Clearing the storage')
                localStorage.clear();
                update()
                }
            }
        </script>
        
</body>

</html>
