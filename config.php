<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

//Connecting to database
$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//Checking connection
/*if($conn==false)
{
    echo "Unsuccessful";
}else
{
    echo "Successful";
}*/
?>