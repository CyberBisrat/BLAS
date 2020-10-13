<?php
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $dbname= 'BDL';
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("unable to connect!");
    echo "Connected!";

  
?>
