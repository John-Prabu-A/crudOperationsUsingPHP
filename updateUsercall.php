<?php

if(isset($_GET['updateid'])){
    $updateid=$_GET['updateid'];
    include 'connect.php';
    $sql = 'select * from crud where id=' . $updateid . '';
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $gender = $row['gender'];
    $salary = $row['salary'];
    $locality = $row['locality'];
    header("location:update.php?id=".$updateid."&name=". $name . "&gender=" . $gender . "&salary=" . $salary . "&locality=" . $locality."");   
}
?>
