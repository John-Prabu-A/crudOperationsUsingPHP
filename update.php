<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php 


    


    if(isset($_GET['id']))
    {
        $updateId=$_GET['id'];
        $name=$_GET['name'];
        $gender=$_GET['gender'];
        $salary=$_GET['salary'];
        $locality=$_GET['locality'];
    }
?>
<body>

    <div class="container">
    <h1 class="text-center">Update Data</h1>

<div class="container">

    <form action="updateUser.php" method="post">
        
    <div class="mb-3">
        <input type="text" name="id" value='<?php echo $updateId; ?>' hidden>
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value='<?php echo $name; ?>'>
    </div>
    <div class="mb-3">
        <label class="form-check-label" for="gender">Gender</label><br>
        <input type="radio" name="gender" class="form-check-input" value='<?php echo"male"; ?>' > Male</input><br>
        <input type="radio" name="gender" class="form-check-input" value='<?php echo"female"; ?>' > Female</input>
    </div>
    <div class="mb-3">
        <label for="salary" class="form-label">Salary</label>
        <input type="number" class="form-control" name="salary" value='<?php echo $salary; ?>'>
    </div>
    <div class="mb-3">
        <label for="locality" class="form-label">Locality</label>
        <input type="text" class="form-control" name="locality" value='<?php echo $locality; ?>'>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
            name='updateUser'>Update</button>
    </div>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>