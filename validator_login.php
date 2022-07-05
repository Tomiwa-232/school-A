<?php
    include('dbcon.php');
    $utme = mysqli_real_escape_string($con, $_POST['jambreg']);
    $my_pass = mysqli_real_escape_string($con, $_POST['password']);


    $query=mysqli_query($con, "SELECT * From enroll WHERE jambreg = '$utme' and password = '$my_pass'") or die(mysqli_error($con));
    $ow = mysqli_fetch_array($query);
    
            if($ow){
                echo "Login successfully!";
            }else{
          echo "We're sorry, your login details are not correct!";
        }
?>