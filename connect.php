<?php 
  $conn=mysqli_connect("localhost","root","","akhil")or die("connection failed..");
  if($conn)
  {
    echo"connected";
  }
  else
    {
       echo"not connected";
    }
?>
