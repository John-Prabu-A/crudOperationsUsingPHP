<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php
  include 'showdata.php';
  include 'adduser.php';
  if (isset($_POST['addUser'])) {
    adduser();
  }
?>


<body>
  <h1 class="text-center">CRUD OPERATIONS</h1>
  <div class="container">
    

    <!-- Button trigger modal -->
    <button type="Add Data" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addData">Add User</button>


    <!-- For Adding data-->
    <div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="addDataLabel">Add Details</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php include 'form.php'; ?>
          </div>
        </div>
      </div>
    </div>


    <table class="table mt-3">
      <thead>
        <tr class="table-dark">
          <th scope="col">Sl.No:</th>
          <th scope="col">Name</th>
          <th scope="col">Gender</th>
          <th scope="col">Salary</th>
          <th scope="col">Locality</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php showData(); ?>
      </tbody>
    </table>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>