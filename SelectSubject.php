<?php
  $connect =mysqli_connect("localhost","root","admin","demo");

  $output = array("subname"=>$row['subname'],"subyear"=>$row['subyear'],"subid"=>$row['subid']);

  $query="SELECT * FROM `subject` WHERE STATUS=1";
  $result=mysqli_query($connect,$query);  

       if(mysqli_num_rows($result) > 0){

          while ($row =mysqli_fetch_array($result)) {

            # code...
               $output[]= $row;

          }
           echo json_encode($output);
           
       }
  ?>
