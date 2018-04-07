<?php
  $connect =mysqli_connect("localhost","root","root","demo");

  $output = array("tname"=>$row['name'],"teduc"=>$row['educ'],"tadrs"=>$row['address'],"tgender"=>$row['gender'],"tmob"=>$row['contact'],"temail"=>$row['email'],"tdesig"=>$row['designation'],"ttexprnc"=>$row['experience'],"tapt"=>$row['aptnature']);

  $query="SELECT * FROM `student`";
  $result=mysqli_query($connect,$query);  

       if(mysqli_num_rows($result) > 0){

          while ($row =mysqli_fetch_array($result)) {

            # code...
               $output[]= $row;

          }
           echo json_encode($output);
           
       }
  ?>
