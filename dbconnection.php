<?php

    $dbcon = mysqli_connect('localhost','root','','cmsdb');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>