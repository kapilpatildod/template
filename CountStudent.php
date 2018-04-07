<?php
  $connect =mysqli_connect("localhost","root","admin","demo");

  $output = array("countsid"=>$row['COUNT(sid)']);

  $query="SELECT COUNT(sid)FROM student;";
  $result=mysqli_query($connect,$query);  

       if(mysqli_num_rows($result) > 0){

          while ($row =mysqli_fetch_array($result)) {

            # code...
               $output[]= $row;

          }
           echo json_encode($output);
           
       }
  ?>
