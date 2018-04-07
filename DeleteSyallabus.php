<?php
  $connect =mysqli_connect("localhost","root","admin","demo");

  $data=json_decode(file_get_contents("php://input"));
  echo $data;
  $query="UPDATE `student` SET `status`=1 WHERE studid=1";
  $result=mysqli_query($connect,$query);  

       if (mysqli_query($connect, $query)) {
    echo "Record Deleted successfully";
      } else {
    echo "Error updating record: " . mysqli_error($conn);
      }
  ?>
