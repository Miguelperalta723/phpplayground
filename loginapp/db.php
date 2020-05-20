<?php 

    $connection = mysqli_connect("localhost" , "root" , "", "loginapp");

    if(!$connection){
        echo "not connected";
    }

?>