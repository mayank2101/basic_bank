<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "united_bank";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
      die("Could not connect to the Database due to the following errors -->" .mysqli_connect_error());
  }





?>