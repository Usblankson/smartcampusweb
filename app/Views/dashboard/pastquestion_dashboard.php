<!-- begin::main-content -->
<div class="main-content">

<!-- begin::container -->
<div class="container">

    <div class="page-header">
            <h4>Past Question Dashboard</h4>
        <small class="">Welcome, <span class="text-primary"><?= $user->name ?></span></small>
    </div>

<form>

  <div class="form-group">
    <label for="Department"></label>
    <select class="form-control" id=department">
      <option>SELECT DEPARTMENT</option>
      <option>ACCOUNTING</option>
      <option>BOTANY</option>
      <option>COMPUTER SCIENCE</option>
      <option>DENTISTRY</option>
      <option>ECONOMICS</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Level"></label>
    <select class="form-control" id="level">
      <option>SELECT LEVEL</option>
      <option>100 LEVEL</option>
      <option>200 LEVEL</option>
      <option>300 LEVEL</option>
      <option>400 LEVEL</option>
      <option>500 LEVEL</option>
      <option>600 LEVEL</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Semester"></label>
    <select class="form-control" id="semester">
      <option>SELECT SEMESTER</option>
      <option>First Semester</option>
      <option>Second Semester</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Continue</button>
</form>
</div>