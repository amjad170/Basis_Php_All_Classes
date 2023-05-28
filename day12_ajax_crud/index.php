<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                    <form action="">

                        <div class="from-group mb-3">
                              <input type="text"
                                class="form-control" name="" id="emp_name"  placeholder="Enter your name">
                        </div>

                        <div class="from-group mb-3">
                              <input type="email"
                                class="form-control" name="" id="emp_email"  placeholder="Enter your email">
                        </div>

                        <div class="from-group mb-3">
                              <input type="text"
                                class="form-control" name="" id="emp_phone"  placeholder="Enter your phone">
                        </div>

                        <div class="from-group mb-3">
                             <select  id="emp_status" class="form-control">
                                <option value="">---select---</option>
                                <option value="1">Active</option>
                                <option value="0">inactive</option>
                             </select>
                        </div>

                        <div class="from-group md-3">
                             <button type="submit" class="btn btn-danger w-100" id="add_emp">Add Employe</button>
                        </div>

                    </form>

                </div>
            </div>

            <div class="col-8">
            <h2>heloo</h2>
            </div>
        </div>
    </div>















    <script src="js/jquery-3.7.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="js/ajax.js"></script>
  </body>
</html>