<?php
   $con= mysqli_connect("localhost","root","","school_a");

    if(!$con){
        echo "Database connected!".mysqli_connect_error();
    }
?>