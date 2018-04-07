<?php

  echo"In database";

  $connect =mysqli_connect("localhost","root","admin","demo");
  $data=json_decode(file_get_contents("php://input"));
  //if(count($data)>1)
//{
   $name = mysqli_real_escape_string($connect,$data->subname);
   $file = mysqli_real_escape_string($connect,$data->notefile);
   
   



   $query="";

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
