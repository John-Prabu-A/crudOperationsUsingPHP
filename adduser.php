<?php 
function addUser(){
  include 'connect.php';
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $salary = $_POST['salary'];
  $locality = $_POST['locality'];

  $sql = "insert into crud (name,gender,salary,locality) values('$name','$gender','$salary','$locality')";
  $result = mysqli_query($con, $sql);
  if (!$result) {
    die(mysqli_error($con));
  }
}
?>