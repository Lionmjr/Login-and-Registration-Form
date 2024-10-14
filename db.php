<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "Eilami@2023";
 $db = "GROUP20";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;
 
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
?>
