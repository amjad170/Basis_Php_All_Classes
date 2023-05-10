<?php

if(isset($_POST['Add'])){
   $fname = $_POST['fname']; 
   $lname = $_POST['lname']; 
   $cname = $_POST['cname']; 
   $cemail = $_POST['cemail']; 
   $title = $_POST['title']; 
   $Country = $_POST['Country']; 
   $business = $_POST['business']; 
   $Comments = $_POST['Comments']; 
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <h1>Let's start a Convenrsation</h1>
        <div class="row">
            <div class="col-6 offset-6">
                    

                    <form  action="" method="POST">
                        <fieldset>
                            <div class="mb-3">
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="First Name" name="fname">
                            </div>
                            <div class="mb-3">
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Last Name" name="lname">
                            </div>
                            <div class="mb-3">
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Company Name" name="cname">
                            </div>
                            <div class="mb-3">
                            <input type="email" id="disabledTextInput" class="form-control" placeholder="Company email" name="cemail">
                            </div>
                            <div class="mb-3">
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Job title" name="title">
                            </div>
                            <div class="mb-3">
                         <select name="Country" class="form-select">
                            <option selected>Select Country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="India">India</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Pakistan">Pakistan</option>
                        </select>
                            </div>
                            <div class="mb-3">
                         <select name="business" class="form-select">
                         <option selected>Business Type</option>
                            <option value="First">First</option>
                            <option value="Second">Second</option>
                            <option value="Third">Third</option>
                            <option value="Fourth">Fourth</option>
                        </select>
                            </div>
                            <div class="mb-3">
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Comments" name="Comments">
                            </div>
                            <button type="submit" class="btn btn-primary" value="Submit" name="Add">Submit</button>
                        </fieldset>
                        </form>
            </div>
        </div>
    </div><br><br>


    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Company Name</th>
      <th scope="col">Company email</th>
      <th scope="col">Job title</th>
      <th scope="col">Country</th>
      <th scope="col">business Type</th>
      <th scope="col">Comments</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php if(isset($fname)){echo $fname;}?></th>
      <td><?php if(isset($lname)){echo $lname;}?></td>
      <td><?php if(isset($cname)){echo $cname;}?></td>
      <td><?php if(isset($cemail)){echo $cemail;}?></td>
      <td><?php if(isset($title)){echo $title;}?></td>
      <td><?php if(isset($Country)){echo $Country;}?></td>
      <td><?php if(isset($business)){echo $business;}?></td>
      <td><?php if(isset($Comments)){echo $Comments;}?></td>
    </tr>
    
    
  </tbody>
</table>







    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> <!-- bundle has other js included in it like popper. js -->
    <script src="js/main.js"></script>
    
</body>
</html>