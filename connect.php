<?php

    $host="localhost";
    $user="root";
    $password="";
    $dbname="crudoperations";

    $con= new mysqli($host,$user,$password,$dbname);
    if(!$con) {
        die(mysqli_error($con));
    }

?>