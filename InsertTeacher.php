<?php


  $connect =mysqli_connect("localhost","root","admin","demo");
  $data=json_decode(file_get_contents("php://input"));
  //if(count($data)>1)
//{
   $name = mysqli_real_escape_string($connect,$data->tname);
   $mobileno = mysqli_real_escape_string($connect,$data->tmob);
   $email = mysqli_real_escape_string($connect,$data->temail);
   $teduc = mysqli_real_escape_string($connect,$data->teduc);
   $gender = mysqli_real_escape_string($connect,$data->tgender);
   $pswd1 = mysqli_real_escape_string($connect,$data->tpswd1);
   $adrs = mysqli_real_escape_string($connect,$data->tadrs);
   $tdesig=mysqli_real_escape_string($connect,$data->tdesig);
   $tapt= mysqli_real_escape_string($connect,$data->tapt);
   $ttexprnc=mysqli_real_escape_string($connect,$data->ttexprnc);



   $query="INSERT INTO `teacher`( `name`, `educ`, `address`, `gender`, `contact`, `email`, `designation`, `experience`, `aptnature`) VALUES ('$name','$teduc','$adrs','$gender','$mobileno','$email','$tdesig','$ttexprnc','$tapt')";

            if(mysqli_query($connect,$query))
            {
                  echo"Inserted Sucessfully";
            }
            else{
              echo "Error creating database: " . mysqli_error($conn);
            }
    //  }
    //  else{
    //    echo"not inside";

    //  }

?>
