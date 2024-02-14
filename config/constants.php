<?php 
    
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'schl_mng_web';

    $con = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
    if($con)
    {
        echo "success";
    }
    else{
        die(mysqli_error($con));
    }

?>