<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <!-- sweet alert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.9/sweetalert2.min.js" integrity="sha512-NRyo1rY9K5C++WKegF4jJxjIIz/AfAy5PvBM96DZy9Btc5S7NQPALl2+gN+rlDVt8wj/vtlmA5XF7vteBrH1eg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.9/sweetalert2.min.css" integrity="sha512-qvZv/T03Gkf34oxn0h7z8Le4LJtmJzZj4c7ppAA6V6dB/wDFAggxLjKOX9ToKNvj9Ala+DLvPG74OGbXliTs4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--end sweet alert -->
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
            <tbody class="tbody">
           
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




<!--Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Confirmation message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lead">
        Are you sure want to remove the Employee?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
        <button type="button" class="btn btn-danger" id="yesDelete">Yes</button>
      </div>
    </div>
  </div>
</div>




<!--Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Edit Employee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

     <!-- from style withour from tag -->
      <div class="from-group mb-3">
            <input type="text" class="form-control" name="" id="uemp_name" placeholder="Enter employee name">
          </div>

          <div class="from-group mb-3">
            <input type="email" class="form-control" name="" id="uemp_email" placeholder="Enter employee email">
          </div>

          <div class="from-group mb-3">
            <input type="text" class="form-control" name="" id="uemp_phone" placeholder="Enter employee phone">
          </div>
          <!--end from style withour from tag -->

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" id="yesUpdate">Update</button>
      </div>
    </div>
  </div>
</div>

