<?php

  //echo"In database";
  header("Access-Control-Allow-Origin: *");
  $connect =mysqli_connect("localhost","root","root","demo");
  $data=json_decode(file_get_contents("php://input"));
  //if(count($data)>1)
//{
   $name = mysqli_real_escape_string($connect,$data->name);
   $mobile = mysqli_real_escape_string($connect,$data->mob);
   $email = mysqli_real_escape_string($connect,$data->email);
   $cladm = mysqli_real_escape_string($connect,$data->cladm);
   $gender = mysqli_real_escape_string($connect,$data->gender);
   $pswd1 = mysqli_real_escape_string($connect,$data->pswd1);
   $pswd2 = mysqli_real_escape_string($connect,$data->pswd2);
   $adrs = mysqli_real_escape_string($connect,$data->adrs);
   $sadhar = mysqli_real_escape_string($connect,$data->sadhar);
   $sclgnm = mysqli_real_escape_string($connect,$data->sclgnm);
   $scaste = mysqli_real_escape_string($connect,$data->scaste);
   



   $query="INSERT INTO `student`(`name`, `mobile`, `email`, `year`, `gender`, `address`, `password`, `cpassword`, `adhar`, `clgname`, `category`) VALUES ('$name','$mobile','$email','$cladm','$gender',
   '$adrs','$pswd1','$pswd2','$sadhar','$sclgnm','$scaste')";

            if(mysqli_query($connect,$query))
            {
                  echo"Inserted Sucessfully";
            }
            else{
              echo "Error creating database: " . mysqli_error($connect);
            }
    //  }
    //  else{
    //    echo"not inside";

    //  }

?>
