<?php
  $connect =mysqli_connect("localhost","root","admin","demo");

  $data=json_decode(file_get_contents("php://input"));
  
  $query="UPDATE `student` SET `status`=0 WHERE sid=" .$data;
  $result=mysqli_query($connect,$query);  

       if (mysqli_query($connect, $query)) {
    echo "Record Deleted successfully";
      } else {
    echo "Error updating record: " . mysqli_error($conn);
      }
  ?>
