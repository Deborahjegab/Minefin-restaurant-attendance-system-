<?php include ('config.php');

   $name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
   $department = mysqli_real_escape_string($conn, $_POST['department_name']);
   $position = mysqli_real_escape_string($conn, $_POST['position']);
  
       
      $insert = "INSERT INTO staff_register(first_name,last_name,department_name,position) VALUES('$name','$lname','$department','$position')";
        $query=  mysqli_query($conn, $insert);
        if($query== true)
        {
          $data = array(
                'status' => 'success',
          );
          echo json_encode($data);
        }
        else{
            $data = array(
             'status' => 'failed',
            );
           echo json_encode($data);
        }
   


?>