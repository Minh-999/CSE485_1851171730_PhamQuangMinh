<?php
   
 $conn = mysqli_connect ("localhost","root","","qlacc");
 if(!$conn){
   
     echo "thất bại";
 }   else
 {
     echo "ok";
 }
?>