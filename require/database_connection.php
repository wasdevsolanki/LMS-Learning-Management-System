<?php 
$connection=mysqli_connect("localhost", "root", "", "lms_db");
if(mysqli_connect_errno()){
    echo "Database Connection Failed! <br />";
      echo "Error No: ".mysqli_connect_errno()."<br />";
      echo "Error Message: ".mysqli_connect_error();
  }

 ?>