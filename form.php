<form action="crudOperations.php" method="post">
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-check-label" for="gender">Gender</label><br>
    <input type="radio" name="gender" class="form-check-input" value="male"> Male</input><br>
    <input type="radio" name="gender" class="form-check-input" value="female"> Female</input>
  </div>
  <div class="mb-3">
    <label for="salary" class="form-label">Salary</label>
    <input type="number" class="form-control" name="salary">
  </div>
  <div class="mb-3">
    <label for="locality" class="form-label">Locality</label>
    <input type="text" class="form-control" name="locality">
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary" name="addUser" data-bs-dismiss="modal">Submit</button>
  </div>
</form>