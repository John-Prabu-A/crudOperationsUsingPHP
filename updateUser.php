<?php 
function updateUser($updateId){
  include 'connect.php';
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $salary = $_POST['salary'];
  $locality = $_POST['locality'];
  $sql = "update crud set name='$name',gender='$gender',salary='$salary',locality='$locality' where id='$updateId'";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:crudOperations.php');
  } else {
    die(mysqli_error($con));
  }
}
if(isset($_POST['id']))
    {
    $updateId=$_POST['id'];
    updateUser($updateId);
    
    }
?>