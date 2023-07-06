<?php
function showData()
{
  include "connect.php";
  $sql = "Select * from `crud`";
  $result = mysqli_query($con, $sql);
  if ($result) {
    $serialNo=0;
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $name = $row['name'];
      $gender = $row['gender'];
      $salary = $row['salary'];
      $locality = $row['locality'];
      $serialNo+=1; 
      echo "<tr>
            <th scope='row'>" . $serialNo. "</th>
            <td>" . $name . "</td>
            <td>" . $gender . "</td>
            <td>" . $salary . "</td>
            <td>" . $locality . "</td>
            <td><button class='btn btn-primary'><a style='text-decoration:none;' href='updateUsercall.php?updateid=" . $id . "' class='text-light'>Update</a></button>
            <button class='btn btn-danger'><a style='text-decoration:none;' href='delete.php?deleteid=" . $id . "' class='text-light'>Delete</a></button></td>
          </tr>";
          
    }
  }
}
?>