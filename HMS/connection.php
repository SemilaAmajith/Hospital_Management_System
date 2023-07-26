<?php

    // connect db
    // $connection = mysqli_connect(dbserver, dbuser, dbpass, dbname);

    $conn = mysqli_connect('localhost','root','','arogya_hms');

    

    // checking the connection
    if(mysqli_connect_errno()){
        die('Database connection field' . mysqli_connect_error());
    }else{
        //  echo "Connection successfully.!";
    }

?>