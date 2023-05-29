<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-danger text-center display-2 py-4">AJAX CRUD</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <div class="employee p-5 border border-danger rounded">
        <!-- for alert message -->
        <div class="msg" >

        </div>
          <!-- from style withour from tag -->
          <div class="from-group mb-3">
            <input type="text" class="form-control" name="" id="emp_name" placeholder="Enter employee name">
          </div>

          <div class="from-group mb-3">
            <input type="email" class="form-control" name="" id="emp_email" placeholder="Enter employee email">
          </div>

          <div class="from-group mb-3">
            <input type="text" class="form-control" name="" id="emp_phone" placeholder="Enter employee phone">
          </div>

          <div class="from-group mb-3">
            <select id="emp_status" class="form-control">
              <option value="">---select---</option>
              <option value="1">Active</option>
              <option value="0">inactive</option>
            </select>
          </div>

          <div class="from-group">
            <button type="submit" class="btn btn-danger w-100" id="add_emp">Add Employe</button>
          </div>
          <!--end from style withour from tag -->


        </div>
      </div>

      <div class="col-8">
        <!-- Table start -->
        <table class="table table-bordered border-danger">
            <thead>
              <tr>
                <th scope="col">#SL</th>
                <th scope="col">Employe Name</th>
                <th scope="col">Employe Email</th>
                <th scope="col">Employe Phone</th>
                <th scope="col">Employe Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>demo</td>
                <td>demo</td>
                <td>demo</td>
                <td>demo</td>
                <td>
                  <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                  <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </td>
              </tr>
             
            </tbody>

        </table>


      </div>
    </div>
  </div>






  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>