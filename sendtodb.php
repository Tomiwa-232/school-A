<?php
    include('dbcon.php');
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $fullname = mysqli_real_escape_string($con, $_POST['fname']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $stateoforigin = mysqli_real_escape_string($con, $_POST['soo']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $religion = mysqli_real_escape_string($con, $_POST['religion']);
    $guarantor_name = mysqli_real_escape_string($con, $_POST['guarantor_name']);
    $guarantor_title = mysqli_real_escape_string($con, $_POST['guarantor_title']);
    $guarantor_phonenum = mysqli_real_escape_string($con, $_POST['guarantor_phonenum']);
    $jamb_reg = mysqli_real_escape_string($con, $_POST['jamb_reg']);
    $my_email = mysqli_real_escape_string($con, $_POST['email']);
    $phonenum = mysqli_real_escape_string($con, $_POST['phonenum']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $conpass = mysqli_real_escape_string($con, $_POST['conpass']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);



    if($pass == $conpass){   
    
          $sql = mysqli_query($con, "SELECT email From enroll WHERE email = '$my_email'") or die(mysqli_error($con));
        $roww = mysqli_num_rows($sql);
    
            if($roww > 0){
                echo "We're sorry, it looks like the email address is already in use. Please use a different email address.";
            }else{
                $query = mysqli_query($con,"INSERT INTO enroll(title,fullname,dateofbirth,stateoforigin,city,nationality,address,religion,guarantorname,guarantortitle,guarantorphone,jambreg,email,phonenum,password,gender)
            VALUES('$title','$fullname','$dob','$stateoforigin','$city','$nationality','$address','$religion','$guarantor_name','$guarantor_title','$guarantor_phonenum','$jamb_reg','$my_email','$phonenum','$pass','$gender')")or die(mysqli_error($con));
           
            }
         
  }  
      else{
  
          echo "Error! Confirm Password Not Match";
                  
        }



?>
